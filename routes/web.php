<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;

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

//Mainpage Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/old', [HomeController::class, 'dashboardLama']);
Route::get('/home', [HomeController::class, 'homeData']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/help', [HomeController::class, 'help'])->name('help');
Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/reseller', [HomeController::class, 'reseller'])->name('reseller');

//Transactions Routes
Route::get('/cart', [TransactionController::class, 'cart'])->name('cart');
Route::get('/konfirmasi', [TransactionController::class, 'konfirmasi'])->name('konfirmasi');
// Route::post('/konfirmasi', [TransactionController::class, 'konfirmasi'])->name('konfirmasi');

//User Routes
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/user/{id}', [UserController::class, 'userDetail']);

//Admin Routes
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

//Products Routes
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'allProducts'])->name('products');
    Route::get('/detail/{id}/{nama}', [ProductController::class, 'detailProduct']);
});

//Route tambahan

Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::get('/tugas', [TugasController::class, 'display'])->name('tugas');
Route::get('/tugasBagusM5', [TugasController::class, 'tugasBagusM5']);
Route::get('/BagusM6', [TugasController::class, 'tugasBagusM6']);

Route::get('/aldo1', function () {
    return view('aldo1');
});
Route::get('/aldo2', function () {
    return view('aldo2');
});

Route::get('/aldodashboard1', function () {
    return view('aldodashboard1');
});

Route::fallback(function () {
    // You can return a view for your custom 404 page here
    return view('errors.404');
});


// Route::fallback(function () {
//     return 'Page not found';
// });