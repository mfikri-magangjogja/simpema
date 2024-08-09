<?php

use App\Http\Controllers\KaprodiController;
use App\Models\Kaprodi;
use Illuminate\Support\Facades\Route;

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

Route::get('/navbar', function () {
    return view('navbar');
});

// Rute untuk halaman Kaprodi
Route::get('/kaprodi', function () {
    return view('/layouts.kaprodi');
})->name('layouts.kaprodi');



// Rute untuk halaman Dosen
Route::get('/dosen', [KaprodiController::class, 'indexDosen'])->name('layouts.dosen');

Route::post('/store-dosen', [KaprodiController::class, 'storeDosen'])->name('storedosen');
Route::put('update-dosen/{d_id}', [KaprodiController::class, 'updateDosen'])->name('updatedosen');
Route::delete('delete-dosen/{d_id}', [KaprodiController::class, 'destroyDosen'])->name('destroydosen');



Route::prefix('kaprodi/dosen')->name('kaprodi.dosen.')->middleware('auth')->group(function () {
    // Route::get('/', [KaprodiController::class, 'indexDosen'])->name('index');
    // Route::get('/create', [KaprodiController::class, 'createDosen'])->name('create');
    // Route::post('/store', [KaprodiController::class, 'storeDosen'])->name('store');
    // Route::get('/{dosen_id}/edit', [KaprodiController::class, 'editDosen'])->name('edit');
    // Route::put('/{dosen_id}', [KaprodiController::class, 'updateDosen'])->name('update');
    // Route::delete('/{dosen_id}', [KaprodiController::class, 'destroyDosen'])->name('destroy');
});



// Rute untuk halaman Kelas
Route::get('/kelas', function () {
    return view('/layouts.kelas');
})->name('layouts.kelas');

// Rute untuk halaman Plotting
Route::get('/plotting', function () {
    return view('/layouts.plotting');
})->name('layouts.plotting');

// Rute untuk halaman Login
Route::get('/logout', function () {
    return view('/layouts.logout');
})->name('layouts.logout');



// Rute untuk halaman Dashboard
Route::get('/dashboard', function () {
    return view('/layouts.dashboard');
})->name('layouts.dashboard');













// Contoh rute component tambah
Route::get('/tambah-dosen', [DosenController::class, 'create'])->name('route.tambahDosen');
Route::get('/tambah-dosenwali', [PlottingController::class, 'create'])->name('route.tambahDosenwali');
Route::get('/tambah-mahasiswa', [PlottingController::class, 'create'])->name('route.tambahMahasiswa');
Route::get('/tambah-kelas', [PlottingController::class, 'create'])->name('route.tambahKelas');
Route::get('/tambah-kelas', [KelasController::class, 'create'])->name('route.tambahKelas');
Route::get('/tambah-kaprodi', [KaprodiController::class, 'create'])->name('route.tambahKaprodi');
Route::get('/tambah-mahasiswa', [MahasiswaController::class, 'create'])->name('route.tambahMahasiswa');

// Contoh rute component edit
Route::get('/edit-dosen', [DosenController::class, 'edit'])->name('route.editDosen');
Route::get('/edit-kelas', [KelasController::class, 'edit'])->name('route.editKelas');
Route::get('/edit-kaprodi', [KaprodiController::class, 'edit'])->name('route.editKaprodi');

// Contoh rute component delete
Route::get('/delete', [DosenController::class, 'delete'])->name('route.delete');
Route::get('/delete', [KelasController::class, 'delete'])->name('route.delete');
Route::get('/delete', [KaprodiController::class, 'delete'])->name('route.delete');

// Contoh rute component keluarkan
Route::get('/keluarkan', [PlottingController::class, 'keluarkan'])->name('route.keluarkan');

// Contoh rute component search
Route::get('/search', [DosenController::class, 'search'])->name('route.search');
Route::get('/search', [KelasController::class, 'search'])->name('route.search');
Route::get('/search', [KaprodiController::class, 'search'])->name('route.search');

// Contoh rute component sidebar
Route::get('/sidebar', [DosenController::class, 'sidebar'])->name('route.sidebar');
Route::get('/sidebar', [KelasController::class, 'sidebar'])->name('route.sidebar');
Route::get('/sidebar', [KaprodiController::class, 'sidebar'])->name('route.sidebar');

// Contoh rute component navbar
Route::get('/navbar', [DosenController::class, 'navbar'])->name('route.navbar');
Route::get('/navbar', [KelasController::class, 'navbar'])->name('route.navbar');
Route::get('/navbar', [KaprodiController::class, 'navbar'])->name('route.navbar');
