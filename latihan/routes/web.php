<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CekLogin;



Route::get('/', function () {
    return view('welcome');
});

Route::get("/profil", function() {
    return view("profil");
});

Route::get("/berita/{id}/{title?}", function($id, $title = NULL) {
    return view("berita", ['id' => $id, 'title' => $title]);
});


// Route::resource('materi', MateriController::class);
// Route::resource('prodi', ProdiController::class);
// Route::resource('fakultas', FakultasController::class);
// Route::resource('mhs', MahasiswaController::class);
// Route::resource('dosen', DosenController::class);

Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
Route::get('/fakultas/{id}/detail', [FakultasController::class, 'detail'])->name('fakultas.detail');
Route::get('/fakultas/create', [FakultasController::class, 'createForm'])->name('fakultas.create');
Route::post('/fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');
Route::post('/fakultas/{id}/destroy', [FakultasController::class, 'destroy'])->name('fakultas.destroy');

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/{id}/detail', [DosenController::class, 'detail'])->name('dosen.detail');
Route::get('/dosen/create', [DosenController::class, 'createForm'])->name('dosen.create');
Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosen.store');
Route::post('/dosen/{id}/destroy', [DosenController::class, 'destroy'])->name('dosen.destroy'); 

Route::get('/mhs', [MahasiswaController::class, 'index'])->name('mhs.index');
Route::get('/mhs/{id}/detail', [MahasiswaController::class, 'detail'])->name('mhs.detail');
Route::get('/mhs/create', [MahasiswaController::class, 'createForm'])->name('mhs.create');
Route::post('/mhs/store', [MahasiswaController::class, 'store'])->name('mhs.store');
Route::post('/mhs/{id}/destroy', [MahasiswaController::class, 'destroy'])->name('mhs.destroy');

Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/prodi/{id}/detail', [ProdiController::class, 'detail'])->name('prodi.detail');
Route::get('/prodi/create', [ProdiController::class, 'createForm'])->name('prodi.create');
Route::post('/prodi/store', [ProdiController::class, 'store'])->name('prodi.store');
Route::post('/prodi/{id}/destroy', [ProdiController::class, 'destroy'])->name('prodi.destroy');

Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/materi/{id}/detail', [MateriController::class, 'detail'])->name('materi.detail');
Route::get('/materi/create', [MateriController::class, 'createForm'])->name('materi.create');
Route::post('/materi/store', [MateriController::class, 'store'])->name('materi.store');
Route::post('/materi/{id}/destroy', [MateriController::class, 'destroy'])->name('materi.destroy');

//Authentication
Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    
    Route::group(['middleware' => [CekLogin::class.':admin']], function(){
        Route::get("/admin", [AdminController::class, 'index']);
        Route::resource('prodi', ProdiController::class);
        Route::resource('fakultas', FakultasController::class);
    });

    Route::group(['middleware' => [CekLogin::class.':user']], function(){
        Route::get("/user", [UserController::class, 'index']);
    });
     Route::middleware([CekLogin::class.':dosen'])->group(function () {
        Route::resource('mahasiswa', MahasiswaController::class);
        Route::resource('materi', MateriController::class);
    });
      Route::middleware([CekLogin::class.':mahasiswa'])->group(function () {
        Route::resource('materi', MateriController::class);
    });
});

