<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Models\Product;


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
Route::get('/old', [HomeController::class, 'dashboardLama']); //Bootstrap
Route::get('/home', [HomeController::class, 'homeData']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/help', [HomeController::class, 'help'])->name('help');
Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/reseller', [HomeController::class, 'reseller'])->name('reseller');

//Transactions Routes
Route::get('/cart', [TransactionController::class, 'cart'])->name('cart');
Route::post('/cart/action/{userID}/{totalHarga}', [TransactionController::class, 'CartAction'])->name('CartAction');
Route::post('/konfirmasi', [TransactionController::class, 'konfirmasi'])->name('konfirmasi');
// Route::post('/konfirmasi', [TransactionController::class, 'konfirmasi'])->name('konfirmasi');
Route::get('/payment/success', [TransactionController::class, 'paymentSuccess'])->name('PaymentSuccess');
Route::get('/payment/pending', [TransactionController::class, 'paymentPending'])->name('PaymentPending');
Route::get('/payment/error', [TransactionController::class, 'paymentError'])->name('PaymentError');

//User Routes
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('web');;
Route::get('/user/{id}', [UserController::class, 'userDetail']);
// Route::get('/', [LoginController::class, 'login'])->name('login');

//Actions
Route::post('login/action', [UserController::class, 'actionlogin'])->name('actionlogin');
Route::post('register/action', [UserController::class, 'actionregister'])->name('actionregister');


Route::get('actionlogout', [UserController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('AdminDashboard');
    Route::prefix('products')->group(function () {
        Route::get('/', [AdminController::class, 'allProducts'])->name('AdminProducts');
        Route::post('/', [AdminController::class, 'tambahProduct'])->name('AdminTambahProduct');
        Route::get('/{produkID}/edit', [AdminController::class, 'edit'])->name('admin.buku.edit');
        Route::put('/{produkID}', [AdminController::class, 'updateProduk'])->name('AdminUpdateProduct');
        Route::delete('/{produkID}', [AdminController::class, 'deleteProduk'])->name('AdminDeleteProduct');
    });
    Route::get('/penjualan', [AdminController::class, 'allPenjualan'])->name('AdminPenjualan');
    Route::get('/resi', [AdminController::class, 'allResi'])->name('AdminResi');
    Route::get('/users', [AdminController::class, 'index'])->name('AdminUser');
    Route::get('/usersprofile', function () {
        $name = "Admin"; // Dummy data
        $menus = ['Dashboard', 'Produk', 'Penjualan', 'Resi', 'Users']; // Contoh data menu
        return view('AdminDashboardHeader', compact('name', 'menus'));
    });
    Route::get('/product', function () {
        $produk = Product::all();
        $name = "Admin"; // Dummy data
        $menus = ['Dashboard', 'Produk', 'Penjualan', 'Resi', 'Users'];
        return view('AdminProduct', compact('produk', 'name', 'menus'));
    });
    Route::get('/admindashboard', function () {
        return 'Admin for users ini untuk admin dashboard';
    });
});

//Products Routes/
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'allProducts'])->name('products');
    Route::post('/sendtocart/{produkID}/{quantity}', [ProductController::class, 'ActionSendToCart'])->name('ActionSendToCart');
    Route::get('/deletefromcart/{cartID}/{produkID}/{quantity}', [ProductController::class, 'ActionDeleteFromCart'])->name('ActionDeleteFromCart');
    Route::get('/detail/{id}/{nama}', [ProductController::class, 'detailProduct']);
});

//Route tambahan

// Route::post('/registerulka', [UserController::class, 'store'])->name('register.store');

Route::get('/tugas', [TugasController::class, 'display'])->name('tugas');
Route::get('/tugasBagusM5', [TugasController::class, 'tugasBagusM5']);
Route::get('/BagusM6', [TugasController::class, 'tugasBagusM6']);


//Route Aldo
Route::get('/aldo1', function () {
    return view('aldo1');
});
Route::get('/aldo2', function () {
    return view('aldo2');
});

Route::get('/aldodashboard1', function () {
    return view('aldodashboard1');
});

//Route 404 Penting!
Route::fallback(function () {
    // You can return a view for your custom 404 page here
    return view('errors.404');
});


// Route::fallback(function () {
//     return 'Page not found';
// });