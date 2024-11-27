<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::resource('/shop', ShopController::class);
Route::resource('/category', CategoryController::class);
// Route::resource('subcategory', SubCategoryController::class);
// Route::resource('color', ColorController::class);
// Route::resource('size', SizeController::class);
// Route::resource('/category', CategoryController::class);
// Route::get('/category', [CategoryController::class, 'index'])->name('admin.test');


// Route::get('/category', [CategoryController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
