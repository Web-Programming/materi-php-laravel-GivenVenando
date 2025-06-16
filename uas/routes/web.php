<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CustomerController;

// Halaman login
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Proses login
Route::post('/proseslogin', [AuthController::class, 'proseslogin']);

// Logout
Route::get('/logout', [AuthController::class, 'logout']);

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Dashboard — hanya 1 route, dan diberi nama
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

// Menu CRUD
Route::resource('/menu', MenuController::class);
Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');

// Daftar semua struk
//Route::get('/struk', [CustomerController::class, 'listStruk'])->name('struk.index');


Route::get('/struk/{menu}', [CustomerController::class, 'struk'])
    ->where('menu', '[a-zA-Z0-9\-]+')
    ->name('struk.detail');




// (Opsional) Kalau kamu ingin buat halaman /customer:
Route::get('/customer', [CustomerController::class, 'index'])->name('customer');

