<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index'])->name('produk');

Route::get('/admin/produk', [App\Http\Controllers\AdminController::class, 'index']);

Route::get('/tambahproduk', [App\Http\Controllers\AdminController::class, 'createproduk']);

Route::post('/produk/create', [App\Http\Controllers\AdminController::class, 'storeproduk']);

Route::get('/edit/{id}/editproduk', [App\Http\Controllers\AdminController::class, 'edit']);

Route::post('/produkedit/{id}', [App\Http\Controllers\AdminController::class, 'produkedit']);

Route::get('/produk/{id}/hapus', [App\Http\Controllers\AdminController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
