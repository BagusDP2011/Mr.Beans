<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;


class ProductController extends Controller
{
    function allProducts()
    {
        $products = Product::all();
        return view('product', ['produk' => $products]);
    }
    function detailProduct($id, $nama)
    {
        return view('old.list_barang', ['id' => $id, 'nama' => $nama]);
    }
    function ActionSendToCart(Request $request, $produkID, $quantity)
    {
        try {
            // Validate the request
            $request->validate([
                'produkID' => 'exists:produk,produkID',
                'quantity' => 'integer|min:1',
            ]);

            $userID = Auth::id();
            $quantity = $request->input('quantity') ?? $quantity;

            // Check if the cart item already exists
            $cartItem = Cart::where('userID', $userID)
                ->where('produkID', $produkID)
                ->first();

            if ($cartItem) {
                // If it exists, update the quantity
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                // If it doesn't exist, create a new cart item
                Cart::create([
                    'userID' => $userID,
                    'produkID' => $produkID,
                    'quantity' => $quantity,
                ]);
            }

            session()->flash('message', 'Memasukkan keranjang Berhasil!');
        } catch (\Exception $e) {
            // Handle the exception
            session()->flash('error', 'Error saat menambahkan ke keranjang: ' . $e->getMessage());
        }
        return redirect()->back();
    }
    function ActionDeleteFromCart(Request $request, $cartID, $produkID, $quantity)
    {
        try {
            // Validate the request
            $request->validate([
                'cartID' => 'integer',
                'produkID' => 'exists:produk,produkID',
                'quantity' => 'integer|min:1',
            ]);

            $userID = Auth::id();
            $produkID = $request->input('produkID') ?? $produkID;
            $quantity = $request->input('quantity') ?? $quantity;

            // Check if the cart item already exists
            $cartItem = Cart::where('userID', $userID)
                ->where('produkID', $produkID)
                ->first();

            if ($cartItem) {
                if ($cartItem->quantity > 1) {
                    $cartItem->quantity -= 1;
                    $cartItem->save();
                } else {
                    $cartItem->delete();
                }
            } else {
                Cart::find($cartID)->delete();
            }
            session()->flash('message', 'Menghapus dari keranjang berhasil!');
        } catch (\Exception $e) {
            // Handle the exception
            session()->flash('error', 'Error saat menghapus dari keranjang: ' . $e->getMessage());
        }
        return redirect()->back();
    }
}
