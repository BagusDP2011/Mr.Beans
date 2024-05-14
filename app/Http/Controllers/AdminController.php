<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        $name = "Admin"; // Dummy data
        $menus = ['Dashboard', 'Produk', 'Penjualan', 'Resi', 'Users']; // Contoh data menu
        return view('AdminDashboard', compact('name', 'menus'));
    }
}
