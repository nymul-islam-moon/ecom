<?php

use App\Http\Controllers\Shop\Auth\LoginController;
use App\Http\Controllers\Shop\Auth\RegisterController;
use App\Http\Controllers\Shop\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:shop')->group(function () {

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::group(['middleware' => ['web',  'auth:shop']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
