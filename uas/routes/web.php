<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\HomeController;
use App\Http\Middleware\CekLogin;

use Illuminate\Support\Facades\Route;

// Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/', [AuthController::class, 'do_login'])->name('login.process');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'do_register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([CekLogin::class . ':admin'])
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get('/home', fn () => view('home'))->name('home');
        });

Route::middleware([CekLogin::class . ':user'])
        ->prefix('user')
        ->name('user.')
        ->group(function () {
            Route::get('/home', fn () => view('home'))->name('home');
        });