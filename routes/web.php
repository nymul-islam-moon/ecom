<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColourController;
use App\Http\Controllers\Admin\ShopController ;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::resource('/shops', ShopController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('/categories',CategoryController::class);
Route::resource('/sub-categories',SubCategoryController::class);
Route::resource('/colours',ColourController::class);
Route::resource('/sizes',SizeController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
