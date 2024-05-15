<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;


class ProductController extends Controller
{
    function allProducts(){
        $products = Product::all();
        return view('product', ['produk'=> $products]);
    }
    function detailProduct($id, $nama){
        return view('old.list_barang', ['id' => $id, 'nama' => $nama]);
    }
    function ActionSendToCart(Request $request, $produkID, $quantity){
        try {
            $request->validate([
                'produkID' => 'exists:produk,produkID',
                'quantity' => 'integer|min:1',
            ]);
            $userID = Auth::id();

            $Cart = Cart::create([
                // 'userID' => Auth::user()->userID(),
                'userID' => $userID,
                'produkID' => $request->input('produkID') !== null ? $request->input('produkID') : $produkID,
                'quantity' => $request->input('quantity') !== null ? $request->input('quantity') : $quantity,
            ]);
    
            session()->flash('message', 'Memasukkan keranjang Berhasil!');
        } catch (\Exception $e) {
            // Handle the exception
            session()->flash('error', 'Error saat menambahkan ke keranjang: ' . $e->getMessage());
        }
        return redirect()->back();
    }
    function ActionDeleteFromCart($cartID){
        try {
            Cart::find($cartID)->delete();
            session()->flash('message', 'Menghapus dari keranjang berhasil!');
        } catch (\Exception $e) {
            // Handle the exception
            session()->flash('error', 'Error saat menghapus dari keranjang: ' . $e->getMessage());
        }
        return redirect()->back();
    }
}
