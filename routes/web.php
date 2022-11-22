<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\MidtransController;
// use App\Http\Controllers\tesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login', function () {
    return view('login');
});

Route::get('/register_customer', function () {
    return view('register_customer');
});

Route::post('/login-post', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register-post', [AuthController::class, 'register_customer'])->name('auth.register');
Route::post('/logout-post', [AuthController::class, 'logout'])->name('logout');



//index customer

Route::group(['middleware' => ['auth','cekrole:Customer']], function(){
    Route::get('/Dashboard-customer', [DashboardController::class, 'index_customer'])->name('Dashboard.index_customer');
    Route::resource('Customer', MenuController::class);
    Route::get('/Customer-index', [AuthController::class, 'index_customer'])->name('Customer.index');
    Route::get('/menu-customer',[MenuController::class, 'menu_customer'])->name('Customer.menu');
    Route::resource('{data}/kategori', KategoriController::class)->shallow();
    Route::get('kategori/{kategori}/list', [MenuController::class, 'kategori'])->name('customer.kategori');

    // Route::get('/makanan-ringan-customer', [MenuController::class, 'makanan_ringan_customer'])->name('Customer.Makanan_ringan');
    // Route::get('/menu-kopi-customer', [MenuController::class, 'kopi_customer'])->name('Customer.menu_kopi');
    // Route::get('/menu-nonkopi-customer', [MenuController::class, 'nonkopi_customer'])->name('Customer.menu_nonkopi');

});


// Route::group(['middleware' => ['auth','cekrole:Dapur']], function(){
//     Route::get('/Dashboard.index', [AuthController::class, 'Customer.index'])->name('Customer.index');
//     Route::get('/Customer.menu_customer',[AuthController::class, 'menu_customer'])->name('Customer.menu_customer');
// });

// Kasir

// Route::group(['middleware' => ['auth','cekrole:Kasir']], function(){
//     Route::resource('menu', MenuController::class);
//     Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard.index');
//     Route::post('/tambah-menu-post', [MenuController::class, 'store'])->name('menu');
// });



// admin

Route::group(['middleware' => ['auth','cekrole:Admin,Kasir,Dapur,Aset']], function(){
    Route::resource('menu', MenuController::class);
    Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard.index');
    Route::post('/tambah-menu-post', [MenuController::class, 'store'])->name('menu');
    Route::post('/tambah-pegawai-post', [PegawaiController::class, 'create'])->name('pegawai');
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('Kategori', KategoriController::class);
    Route::resource('Datauser', DatauserController::class);
    Route::resource('{data}/kategori', KategoriController::class)->shallow();
    Route::resource('Aset', AsetController::class);
    Route::get('kategori/{kategori}/list', [MenuController::class, 'kategori'])->name('menu.kategori');
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('Cart', CartController::class);
    Route::post('/tambah-aset-post', [AsetController::class, 'store'])->name('aset');

});


Route::get('storage/', function($image = null)
{
    $file = storage::get('storage/' . $image);
    $mimetype = storage::mimeType('storage/' . $image);
    return response($file, 200)->header('Content-Type', $mimetype);
});

Route::get('/transaksi', [MidtransController::class, 'index'])->name('tansaksi');
Route::resource('cart', CartDetailController::class);



