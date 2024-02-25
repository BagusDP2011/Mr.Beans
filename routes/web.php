<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'homeData']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/konfirmasi', function () {
    return view('konfirmasi');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/reseller', function () {
    return view('reseller');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/users', function () {
        return 'Admin for users';
    });
    Route::get('/admindashboard', function () {
        return 'Admin for users ini untuk admin dashboard';
    });
});

// Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//     return view('list_barang', compact('id', 'nama'));
// });
Route::get('/list_barang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/product', [ListBarangController::class, 'tampilkanSemua']);
