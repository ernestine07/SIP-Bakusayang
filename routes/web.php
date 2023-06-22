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
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\lupapasswordController;
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

// Route::get('/', function () {
//     return view('Landingpage');
// });

Route::get('/cetak', function () {
    return view('transaksi.cetak_struk');
});





Route::post('/login-post', [AuthController::class, 'login'])->name('auth.login');
Route::get('/lupa_password', [lupapasswordController::class, 'lihatlupapasswordform'])->name('lupa_password');
Route::get('/loginguest', [AuthController::class, 'loginguest'])->name('loginguest');
Route::post('/lupa_password_post', [lupapasswordController::class, 'storepassword'])->name('verifikasi');
Route::get('/reset_password/{token}', [lupapasswordController::class, 'lihatResetPassword'])->name('reset_password');
Route::post('/reset_password', [lupapasswordController::class, 'storeResetPasswordForm'])->name('lihat_reset_password');
Route::post('/register-post', [AuthController::class, 'register_customer'])->name('auth.register');
Route::post('/', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [KritikController::class, 'index'])->name('kritik');
Route::post('/pesanpost', [KritikController::class, 'store'])->name('store');

 
// SEMUA DASHBOARD SELAIN 

Route::group(['middleware' => ['auth','cekrole:Kasir,Admin,Pemilik,Aset']], function(){
    Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard.index');
});

// SEMUA KRITIK DAN SARAN
// Route::group(['middleware' => ['auth','cekrole:Kasir,Admin,Pemilik,Aset,Customer']], function(){
//     Route::resource('Pesan', KritikController::class);
//     Route::get('/pesan', [KritikController::class, 'index'])->name('kritik');
//     Route::post('/pesanpost', [KritikController::class, 'store'])->name('store');
// });

//index customer

Route::group(['middleware' => ['cekrole:Customer', 'auth']], function(){
    Route::get('/Dashboardcustomer', [DashboardController::class, 'indexcustomer'])->name('Customer.index');
    Route::get('/menu-customer1',[CustomerController::class, 'menu_customer'])->name('Customer.menu');
    Route::resource('{data}/kategori1', KategoriController::class)->shallow();
    Route::get('/kategori1/{id}/list', [MenuController::class, 'kategoricustomer'])->name('kategori1');
    Route::get('/cartcustomer', [CartController::class, 'cartcustomer'])->name('cart');
    Route::post('/cartcustomer-post', [CartController::class, 'createcart'])->name('cart1');
    Route::delete('/cartcustomer-destroy/{id}', [CartController::class, 'destroycart'])->name('cart2');
    Route::get('/transaksicustomer', [TransaksiController::class, 'transaksicustomer'])->name('transaksi');
    Route::post('/tambahpesanan', [CartController::class, 'tambahpesanan'])->name('pesanan');
    Route::get('/detailtransaksi/{id}', [TransaksiController::class, 'detailtransaksicustomer'])->name('detailtransaksi');
});
// Kasir

Route::group(['middleware' => ['auth','cekrole:Kasir']], function(){
    Route::get('/menu-customer2',[MenuController::class, 'menu_customer'])->name('Customer.menu1');
    Route::resource('{data}/kategori2', KategoriController::class)->shallow();
    Route::get('/kategori2/{id}/list', [MenuController::class, 'kategorikasir'])->name('kategori2');
    Route::post('/tambah-cart-post1', [CartController::class, 'store'])->name('cartkasir');
    Route::get('/Cartkasir', [CartController::class, 'index'])->name('cartkasir');
    Route::resource('Cart', CartController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::get('/cetak/{id}', [TransaksiController::class, 'cetak'])->name('cetak');
    Route::get('/selesai/{id}', [TransaksiController::class, 'selesai'])->name('selesai');
    Route::get('/proses1', [LaporanController::class, 'keuangankasir'])->name('proses_keuangan1');
    Route::get('/penjualan1', [LaporanController::class, 'penjualankasir'])->name('penjualan1');
});

// Pemilik
Route::group(['middleware' => ['auth','cekrole:Pemilik']], function(){
    // Route::get('/Dashboardpemilik', [DashboardController::class, 'index'])->name('Dashboard.index');
    Route::get('/menu-customer3',[MenuController::class, 'menu_customer'])->name('Customer.menu3');
    Route::resource('{data}/kategori3', KategoriController::class)->shallow();
    Route::get('/kategori3/{id}/list', [MenuController::class, 'kategoricustomer'])->name('kategori3');
    Route::get('/datapegawai', [PegawaiController::class, 'index'])->name('Datapegawai');
    Route::get('/databarang', [AsetController::class, 'index'])->name('Databarang');
    Route::get('/datauser', [DatauserController::class, 'index'])->name('Datauser');
    Route::get('proses2', [LaporanController::class, 'keuangankasir'])->name('proses_keuangan');
    Route::get('penjualan2', [LaporanController::class, 'penjualankasir'])->name('penjualan');
    Route::get('stok2', [LaporanController::class, 'stokbarang'])->name('stok_barang2');
});


// admin dan Aset

Route::group(['middleware' => ['auth','cekrole:Admin,Aset']], function(){
    // Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard.index');
    Route::resource('menu', MenuController::class);
    Route::post('/tambah-menu-post', [MenuController::class, 'store'])->name('menu');
    Route::post('/tambah-pegawai-post', [PegawaiController::class, 'create'])->name('pegawai');
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('Kategori', KategoriController::class);
    Route::resource('Datauser', DatauserController::class);
    Route::resource('{data}/kategori', KategoriController::class)->shallow();
    Route::resource('Aset', AsetController::class);
    Route::get('kategori/{kategori}/list', [MenuController::class, 'kategori'])->name('menu.kategori');
    Route::post('/tambah-cart-post', [CartController::class, 'store'])->name('cart');
    Route::post('/tambah-aset-post', [AsetController::class, 'store'])->name('aset');
    Route::resource('laporan', LaporanController::class);
    Route::get('proses', [LaporanController::class, 'proseskeuangan'])->name('laporan.proses_keuangan');
    Route::get('penjualan', [LaporanController::class, 'prosespenjualan'])->name('laporan.penjualan');
    Route::get('stok', [LaporanController::class, 'stokbarang'])->name('laporan.stok_barang');
});

Route::get('storage/', function($image = null)
{
    $file = storage::get('storage/' . $image);
    $mimetype = storage::mimeType('storage/' . $image);
    return response($file, 200)->header('Content-Type', $mimetype);
});

Route::get('/test', function () {
    return view('test');
});

