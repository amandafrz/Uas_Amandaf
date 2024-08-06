<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProdukController;
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
Route::get('/pengeluaran', [SupplierController::class, 'index'])->middleware('auth');
Route::get('/pengeluaran/form/', [SupplierController::class, 'create'])->middleware('auth');
Route::post('/pengeluaran/store', [SupplierController::class, 'store'])->middleware('auth');
Route::get('/pengeluaran/edit/{id}', [SupplierController::class, 'edit'])->middleware('auth');
Route::put('/pengeluaran/{id}', [SupplierController::class, 'update'])->middleware('auth');
Route::delete('/pengeluaran/{id}', [SupplierController::class, 'destroy'])->middleware('auth');
