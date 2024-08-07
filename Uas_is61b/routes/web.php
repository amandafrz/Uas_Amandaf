<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// kategori
Route::get('/kategori', [KategoriController::class, 'index'])->middleware('auth');
Route::get('/kategori/form/', [KategoriController::class, 'create'])->middleware('auth');
Route::post('/kategori/store/', [KategoriController::class, 'store'])->middleware('auth');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->middleware('auth');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->middleware('auth');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->middleware('auth');
// produk
Route::get('/produk', [ProdukController::class, 'index'])->middleware('auth');
Route::get('/produk/form/', [ProdukController::class, 'create'])->middleware('auth');
Route::post('/produk/store/', [ProdukController::class, 'store'])->middleware('auth');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->middleware('auth');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->middleware('auth');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->middleware('auth');
// supplier
Route::get('/supplier', [SupplierController::class, 'index'])->middleware('auth');
Route::get('/supplier/form/', [SupplierController::class, 'create'])->middleware('auth');
Route::post('/supplier/store', [SupplierController::class, 'store'])->middleware('auth');
Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit'])->middleware('auth');
Route::put('/supplier/{id}', [SupplierController::class, 'update'])->middleware('auth');
Route::delete('/supplier/{id}', [SupplierController::class, 'destroy'])->middleware('auth');
// Pengeluaran
Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->middleware('auth');
Route::get('/pengeluaran/form/', [PengeluaranController::class, 'create'])->middleware('auth');
Route::post('/pengeluaran/store', [PengeluaranController::class, 'store'])->middleware('auth');
Route::get('/pengeluaran/edit/{id}', [PengeluaranController::class, 'edit'])->middleware('auth');
Route::put('/pengeluaran/{id}', [PengeluaranController::class, 'update'])->middleware('auth');
Route::delete('/pengeluaran/{id}', [PengeluaranController::class, 'destroy'])->middleware('auth');
// pembelian
Route::get('/pembelian', [PembelianController::class, 'index'])->middleware('auth');
Route::get('/pembelian/form/', [PembelianController::class, 'create'])->middleware('auth');
Route::post('/pembelian/store', [PembelianController::class, 'store'])->middleware('auth');
Route::get('pembelian/edit/{id}', [PembelianController::class, 'edit'])->middleware('auth');
Route::put('/pembelian/{id}', [PembelianController::class, 'update'])->middleware('auth');
Route::delete('/pembelian/{id}', [PembelianController::class, 'destroy'])->middleware('auth');
// Penjualan
Route::get('/penjualan', [PenjualanController::class, 'index'])->middleware('auth');
Route::get('/penjualan/form/', [PenjualanController::class, 'create'])->middleware('auth');
Route::post('/penjualan/store', [PenjualanController::class, 'store'])->middleware('auth');
Route::get('/penjualan/edit/{id}', [PenjualanController::class, 'edit'])->middleware('auth');
Route::put('/penjualan/{id}', [PenjualanController::class, 'update'])->middleware('auth');
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->middleware('auth');

// Transaksi
Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware('auth');
// Route::get('/transaksi/form/', [TransaksiController::class, 'create'])->middleware('auth');
// Route::post('/transaksi/store', [TransaksiController::class, 'store'])->middleware('auth');
// Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit'])->middleware('auth');
// Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->middleware('auth');
// Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->middleware('auth');
// Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->middleware('auth');
Route::get('/laporan/form/', [LaporanController::class, 'create'])->middleware('auth');
Route::post('/laporan/store', [LaporanController::class, 'store'])->middleware('auth');
Route::get('/laporan/edit/{id}', [LaporanController::class, 'edit'])->middleware('auth');
Route::put('/laporan/{id}', [LaporanController::class, 'update'])->middleware('auth');
Route::delete('/laporan/{id}', [LaporanController::class, 'destroy'])->middleware('auth');
