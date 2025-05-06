<?php
use App\Http\Controllers\MateriController;

use App\Http\Controllers\MhsApiController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MateriController::class, 'index']);

Route::get('/materi/index',action:[MateriController::class,'index']);

Route::get('/materi/index/{id}',action:[MateriController::class,'detail']);

Route::resource('prodi',ProdiController::class,);

Route::apiResource('api/mhs',MhsApiController::class);

Route::get('/', [MateriController::class, 'index']);

Route::get('/home', [MateriController::class, 'home']);

Route::get('/about', [MateriController::class, 'about']);