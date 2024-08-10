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
Route::get('/dosen-cari', [KaprodiController::class, 'cariNamaDosen'])->name('caridosen');


Route::get('/kelas', [KaprodiController::class, 'indexKelas'])->name('layouts.kelas');
Route::post('/store-kelas', [KaprodiController::class, 'storeKelas'])->name('storekelas');
Route::put('update-kelas/{id}', [KaprodiController::class, 'updateKelas'])->name('updatekelas');
Route::delete('delete-kelas/{id}', [KaprodiController::class, 'destroyKelas'])->name('destroykelas');
Route::get('/kelas-cari', [KaprodiController::class, 'cariNamaKelas'])->name('carikelas');






// Rute untuk halaman plotting
Route::get('/plotting', [KaprodiController::class, 'indexPlot'])->name('layouts.plotting');
Route::get('/plotting-dosen', [KaprodiController::class, 'plotDosen'])->name('plottingdosen');
Route::post('/plotting-updatedosen', [KaprodiController::class, 'updateKelasDosen'])->name('plottingupdatedosen');
Route::delete('/plotting-destroydosen/{id}', [KaprodiController::class, 'destroyKelasDosen'])->name('plottingdestroydosen');
Route::post('/plotting-updatemahasiswa', [KaprodiController::class, 'updateKelasMahasiswa'])->name('plottingupdatemahasiswa');
Route::delete('/plotting-destroymahasiswa/{id}', [KaprodiController::class, 'destroyKelasMahasiswa'])->name('plottingdestroymahasiswa');







// Rute untuk halaman Login
Route::get('/logout', function () {
    return view('/layouts.logout');
})->name('layouts.logout');



// Rute untuk halaman Dashboard
Route::get('/dashboard', function () {
    return view('/layouts.dashboard');
})->name('layouts.dashboard');











