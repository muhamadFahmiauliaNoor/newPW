<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\UKMController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('ukms', UKMController::class)->only(['index', 'show']);
Route::resource('facilities', FacilityController::class);
Route::resource('about', AboutController::class)->only(['index']);
Route::resource('registrations', RegistrationController::class)
    ->only(['create', 'store'])
    ->name('create', 'registrations.create')
    ->name('store', 'registrations.store');


    

