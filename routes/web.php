<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DistributorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/postregist', [LoginController::class, 'postregist'])->name('postregist');


Route::group(['middleware' => 'auth'], function() {

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Buku
    Route::get('/daftar_buku', [BukuController::class, 'index'])->name('buku');
    Route::get('/buku/detail/{id}', [BukuController::class, 'detail'])->name('detail.buku');
    Route::post('/buku/store', [BukuController::class, 'store'])->name('tambah.buku');
    Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('edit.buku');
    Route::post('/buku/update/{id}', [BukuController::class, 'update'])->name('update.buku');
    Route::get('buku/delete/{id}', [BukuController::class, 'destroy'])->name('delete.buku');

    //Distributor
    Route::get('/distributor', [DistributorController::class, 'index'])->name('distributor');
    Route::post('/distributor/tambah', [DistributorController::class, 'store'])->name('tambah.distributor');

    //Penjualan
    Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan');
    Route::post('/penjualan/tambah', [PenjualanController::class, 'store'])->name('tambah.penjualan');
    Route::get('/penjualan/detail/{id}', [PenjualanController::class, 'detail'])->name('detail.penjualan');
});

Route::get('/layout', [LayoutController::class, 'index'])->name('layout');