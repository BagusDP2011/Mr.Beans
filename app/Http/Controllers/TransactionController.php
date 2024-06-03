<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\TransactionHistory;
use App\Models\Cart;
use App\Models\Product;
use Midtrans;


class TransactionController extends Controller
{
    function cart()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
            // Redirect to login page if not authenticated
        }
        $id = auth()->user()->userID;
        $query = Cart::with('product')
            ->where('userID', $id)
            ->where('quantity', '>', 0)
            ->orderBy('produkID', 'ASC')
            ->get();
        $totalharga = $query->sum(function ($item) {
            return $item->product->harga * $item->quantity;
        });
        $no = 1;
        return view('cart', compact('id', 'query', 'no', 'totalharga'));
    }

    function konfirmasi()
    {
        return view('konfirmasi');
    }

    function CartAction($userID, $totalHarga)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_ServerKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $query = Cart::with('product')
            ->where('userID', Auth::user()->userID)
            ->where('quantity', '>', 0)
            ->orderBy('produkID', 'ASC')
            ->get();

        $totalHarga = 0;

        foreach ($query as $cartItem) {
            $totalHarga += $cartItem->product->harga * $cartItem->quantity;
        }

        $orderId = 'TH-00' . rand(0, 2000);

        $transaction_details = array(
            'order_id' => rand(),
            'THID' => 'order_id',
            'gross_amount' => $totalHarga,
        );

        $items = [];
        foreach ($query as $item) {
            $items[] = [
                'id' => $item->product->produkID,
                'price' => $item->product->harga,
                'quantity' => $item->quantity,
                'name' => $item->product->namaProduk,
            ];
        };

        $shipping_address = array(
            // 'first_name'   => "John",
            // 'last_name'    => "Watson",
            'address'      => Auth::user()->alamat,
            'city'         => "Jakarta",
            'postal_code'  => "51162",
            // 'phone'        => "081322311801",
            // 'country_code' => 'IDN'
        );

        $customer_details = array(
            'first_name'    => Auth::user()->fullName,
            'last_name'     => Auth::user()->username,
            'email'         => Auth::user()->email,
            'phone'         => Auth::user()->noHp,
            'shipping_address' => $shipping_address
        );
        // 'billing_address'  => $billing_address,
        $params = array(
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details'        => $items,

        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $productIDs = [];

        foreach ($query as $cartItem) {
            $productIDs[] = $cartItem->produkID;
        }

        $transactionHistory = TransactionHistory::create([
            'THID' => Str::uuid()->toString(),
            'userID' => Auth::user()->userID,
            'produkID' => $productIDs,
            'order_id' => $orderId,
            'totalHarga' => $totalHarga,
            'status' => 'Pending',
            'snapToken' => $snapToken,
        ]);

        return view('konfirmasi', ['transactionHistory' => $transactionHistory, 'userID' => $userID, 'totalHarga' => $totalHarga, 'snapToken' => $snapToken, 'query' => $query]);
    }

    // function pembayaranPG($transactionHistory, $userID, $totalHarga, $snapToken, $query)
    // {
    //     $products = Product::join('cart', 'products.produkID', '=', 'cart.produkID')
    //         ->where('cart.userID', $userID)
    //         ->orderBy('products.produkID', 'ASC')
    //         ->get();
    //     return redirect()->route('pembayaranPG', ['transactionHistory' => $transactionHistory, 'userID' => $userID, 'totalHarga' => $totalHarga, 'snapToken' => $snapToken, 'query' => $query]);
    //     return view('konfirmasi', ['transactionHistory' => $transactionHistory, 'userID' => $userID, 'totalHarga' => $totalHarga, 'snapToken' => $snapToken, 'query' => $query]);
    // }

    //Payments
    public function paymentSuccess()
    {
        try {
            $userID = Auth::id();

            // Find the pending transaction for the user
            $transaction = TransactionHistory::where('userID', $userID)
                ->where('status', 'pending')
                ->first();

            // If a pending transaction is found, update its status to "success"
            if ($transaction) {
                $transaction->status = 'Success';
                $transaction->save();

                Cart::where('userID', $userID)->delete();

                session()->flash('message', 'Transaksi berhasil, silahkan cek email dan tunggu barang sampai. Terima kasih!');
            } else {
                session()->flash('error', 'Tidak ada transaksi yang pending.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Error updating transaction status: ' . $e->getMessage());
        }

        return redirect()->route('home');
    }

    public function paymentPending(Request $request)
    {
        return redirect()->route('konfirmasi')->with('error', 'There was an error processing your payment. Please try again later.');
    }

    public function paymentError(Request $request)
    {
        return redirect()->route('konfirmasi')->with('error', 'Ada kesalahan saat memproses pesanan anda. Coba lagi nanti.');
    }
}
