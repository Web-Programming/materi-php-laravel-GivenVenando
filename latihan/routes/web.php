<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MhsApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/materi/index',action:[MateriController::class,'index']);

Route::get('/materi/index/{id}',action:[MateriController::class,'detail']);

Route::resource('prodi',ProdiController::class,);

Route::apiResource('api/mhs',MhsController::class);


