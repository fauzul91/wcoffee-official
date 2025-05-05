<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// ==========================
// Guest Routes (Public)
// ==========================
Route::view('/', 'index')->name('home');
Route::view('/shop', 'shop')->name('shop');
Route::view('/join-us', 'join-us')->name('join-us');

// ==========================
// Mitra Routes
// ==========================
Route::middleware(['auth'])->group(function () {
    Route::view('/mitra', 'mitra.dashboard')->name('mitra.dashboard');
    Route::view('/ajukan-kerjasama', 'mitra.ajukan-kerjasama')->name('mitra.ajukan-kerjasama');
});

// ==========================
// Authenticated Routes
// ==========================
Route::middleware('auth')->post('/logout', [AuthController::class, 'logout'])->name('logout');