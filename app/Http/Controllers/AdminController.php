<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        $name = "Admin"; // Dummy data
        $menus = ['Dashboard', 'Produk', 'Penjualan', 'Resi', 'Users']; // Contoh data menu
        return view('AdminDashboard', compact('name', 'menus'));
    }
    public function index()
    {
        $users = User::all();
      
        return view('AdminUser', compact('users'));
    }
    function allProducts(){
        $products = Product::all();
        return view('AdminProduct', ['produk'=> $products]);
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