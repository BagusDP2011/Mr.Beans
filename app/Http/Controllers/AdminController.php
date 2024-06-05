<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\TransactionHistory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function adminDashboard()
    {
        return view('AdminDashboard');
    }

    public function index()
    {
        $users = User::all();

        return view('AdminUser', compact('users'));
    }

    function allProducts()
    {
        $products = Product::all();
        return view('AdminProduct', ['produk' => $products]);
    }

    function allPenjualan()
    {
        // Fetch transaction histories with their related user models
        $transactionHistories = TransactionHistory::with('user')->get();

        // Fetch related products for each transaction history
        $transactionHistories->each(function ($transactionHistory) {
            if (is_array($transactionHistory->produkID) && !empty($transactionHistory->produkID)) {
                $transactionHistory->products = Product::whereIn('produkID', $transactionHistory->produkID)->get();
            } else {
                $transactionHistory->products = collect(); // Empty collection if no products found
            }
        });

        return view('AdminPenjualan', ['TH' => $transactionHistories]);
    }


    function allResi()
    {
        return view('AdminResi');
    }

    //----------------------------------------------------------------
    //Batas Admin Product
    public function tambahProduct(Request $request)
    {
        try {
            $request->validate([
                'namaProduk' => 'required|string|max:255',
                'harga' => 'required|numeric|integer',
                'stock' => 'required|numeric|integer',
                'deskripsi' => 'required|string|max:2000',
                'gambar' => 'required',
            ]);

            Product::create([
                'namaProduk' => $request->namaProduk,
                'harga' => $request->harga,
                'stock' => $request->stock,
                'deskripsi' => $request->deskripsi,
                'gambar' => $request->gambar,
            ]);

            session()->flash('message', 'Product berhasil ditambahkan.');
            return redirect()->route('AdminProducts')->with('success', 'Product berhasil ditambahkan');
        } catch (\Exception $e) {
            session()->flash('error', 'Error occurred while updating product: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function updateProduk(Request $request, $produkID)
    {
        try {
            // Validate the request data
            $request->validate([
                'namaProduk' => 'required|string|max:255',
                'harga' => 'required|numeric|integer',
                'stock' => 'required|numeric|integer',
                'deskripsi' => 'required|string|max:2000',
                'gambar' => 'required',
            ]);

            // Find the Product by ISBN
            $Product = Product::where('produkID', $produkID)->first();

            if (!$Product) {
                // Handle Product not found
                return redirect()->back()->with('error', 'Product not found.');
            }

            // Update the Product with the new data
            $Product->namaProduk = $request->namaProduk;
            $Product->harga = $request->harga;
            $Product->stock = $request->stock;
            $Product->deskripsi = $request->deskripsi;
            $Product->gambar = $request->gambar;

            // Save the updated Product
            $Product->save();

            // Redirect back with success message
            session()->flash('message', 'Product updated successfully.');
            return redirect()->back()->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'Error occurred while updating product: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function deleteProduk($produkID)
    {
        try {
            $product = Product::where('produkID', $produkID)->firstOrFail();
            $product->delete();
            session()->flash('message', 'Product berhasil dihapus.');
            return redirect()->route('AdminProducts')->with('success', 'Product deleted successfully');
        } catch (\Exception $e) {
            session()->flash('error', 'Error occurred while updating product: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}

//class UserController extends Controller
//{
//    public function index()
//    {
//        $users = User::all();
//        dd($users); // Menghentikan eksekusi dan menampilkan nilai $users
//        return view('AdminUser', compact('users'));
//    }
//}