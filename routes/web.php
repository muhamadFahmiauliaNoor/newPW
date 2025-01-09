<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->middleware('auth:admin');
    Route::get('login', [AdminController::class, 'login']);
    Route::post('authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');

    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('dosen', DosenController::class);
    Route::resource('mata-kuliah', MataKuliahController::class);
});
Route::get('/', [HomepageController::class, 'index'])->name('homepage');

