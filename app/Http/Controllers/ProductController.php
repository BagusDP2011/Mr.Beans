<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function allProducts(){
        return view('product');
    }
    function detailProduct($id, $nama){
        return view('list_barang', ['id' => $id, 'nama' => $nama]);
    }
}
