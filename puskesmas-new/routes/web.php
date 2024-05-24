<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/beranda', function () {
    return "Halaman Beranda";
});

Route::get('/salam', function () {
    return "Selamat Datang Ilyas di Laravel!";
});

Route::get('/profile', function () {
    return "Halaman profile";
});

// Praktikum Laravel 2

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

//Praktikum Laravel 3
Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);