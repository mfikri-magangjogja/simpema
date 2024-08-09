<?php

use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\ProfileController;
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



Route::prefix('kaprodi/dosen')->name('kaprodi.dosen.')->middleware('auth')->group(function () {
    Route::get('/', [KaprodiController::class, 'indexDosen'])->name('index');
    Route::get('/create', [KaprodiController::class, 'createDosen'])->name('create');
    Route::post('/store', [KaprodiController::class, 'storeDosen'])->name('store');
    Route::get('/{dosen_id}/edit', [KaprodiController::class, 'editDosen'])->name('edit');
    Route::put('/{dosen_id}', [KaprodiController::class, 'updateDosen'])->name('update');
    Route::delete('/{dosen_id}', [KaprodiController::class, 'destroyDosen'])->name('destroy');
});

Route::get('/kaprodi/dosen', [KaprodiController::class, 'cariNamaDosen'])->name('kaprodi.dosen.index');
Route::get('/kaprodi/mahasiswa', [KaprodiController::class, 'cariNamaKelas'])->name('kaprodi.mahasiswa.index');


// Rute untuk kaprodi mengelola kelas
Route::prefix('kaprodi/kelas')->name('kaprodi.kelas.')->middleware('auth')->group(function () {
    Route::get('/', [KaprodiController::class, 'indexKelas'])->name('index');
    Route::get('/create', [KaprodiController::class, 'createKelas'])->name('create');
    Route::post('/store', [KaprodiController::class, 'storeKelas'])->name('store');
    Route::get('/{id}/edit', [KaprodiController::class, 'editKelas'])->name('edit');
    Route::put('/{id}', [KaprodiController::class, 'updateKelas'])->name('update');
    Route::delete('/{id}', [KaprodiController::class, 'destroyKelas'])->name('destroy');
});

Route::middleware('useraccess:kaprodi')->group(function () {
    Route::get('/kaprodi/plot/index', [KaprodiController::class, 'indexPlot'])->name('kaprodi.plot.index');
    Route::get('/kaprodi/plot/dosen/coba', [KaprodiController::class, 'plotDosenCoba'])->name('kaprodi.plot.dosen');
    Route::post('/kaprodi/dosen/update-kelas', [KaprodiController::class, 'updateKelasDosen'])->name('kaprodi.dosen.update.kelas');
    Route::delete('/dosen/{id}', [KaprodiController::class, 'destroyKelasDosen'])->name('kaprodi.dosen.destroy');
    Route::get('/kaprodi/plot/mahasiswa/coba', [KaprodiController::class, 'plotMahasiswaCoba'])->name('kaprodi.plot.mahasiswa');
    Route::post('/kaprodi/mahasiswa/update-kelas', [KaprodiController::class, 'updateKelasMahasiswa'])->name('kaprodi.mahasiswa.update.kelas');
    Route::delete('/mahasiswa/{id}', [KaprodiController::class, 'destroyKelasMahasiswa'])->name('kaprodi.mahasiswa.destroy');
});

require __DIR__ . '/auth.php';
