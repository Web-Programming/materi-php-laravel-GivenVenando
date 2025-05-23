<?php
use App\Http\Controllers\MateriController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MateriController::class, 'index']);

Route::get('/materi/index',action:[MateriController::class,'index']);

Route::get('/materi/index/{id}',action:[MateriController::class,'detail']);

Route::get('/', [MateriController::class, 'index']);

Route::get('/home', [MateriController::class, 'home']);

Route::get('/about', [MateriController::class, 'about']);

Route::resource('prodi', [MateriController::class, 'prodi']);