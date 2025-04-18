<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: function () {
    return view('index');
})->name('home');

Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');

Route::get('/join-us', function () {
    return view('pages.join-us');
})->name('join-us');  

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});