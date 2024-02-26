<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function allProducts(){
        $products = Product::all();
        return view('product', ['produk'=> $products]);
    }
    function detailProduct($id, $nama){
        return view('list_barang', ['id' => $id, 'nama' => $nama]);
    }
}
