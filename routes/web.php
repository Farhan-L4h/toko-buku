<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// User
Route::controller(UserController::class)->group(function () {
    // view
     Route::get('/user', 'index')->name('user.index');
 });

//  Admin
Route::controller(AdminController::class)->group(function () {
    // view
     Route::get('/admin', 'index')->name('admin.index');
     Route::get('/admin.kategori', 'kategori')->name('kategori');
     Route::get('/admin.barang', 'barang')->name('barang');
     Route::get('/admin.tmb-barang', 'createbrng')->name('tmb-barang');
     Route::get('/admin.tmb-kategori', 'createktgr')->name('tmb-kategori');
    //  create
     Route::post('/admin.tmb-kategori.create', 'store')->name('kategori.store');
     Route::post('/admin.tmb-barang.create', 'simpan')->name('barang.store2');
 });




// bahan
Route::get('/bahan', function () {
    return view('bahan.bahan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
