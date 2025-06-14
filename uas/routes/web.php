
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
    return view('auth.login');
})->name('login');

Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::resource('/menu', MenuController::class);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');