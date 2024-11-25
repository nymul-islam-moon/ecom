<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TestController;
use Illuminate\Support\Facades\Route;

// Route::resource('/shop', ShopController::class);
// Route::resource('/category', CategoryController::class);
// Route::resource('subcategory', SubCategoryController::class);
// Route::resource('color', ColorController::class);
// Route::resource('size', SizeController::class);
// Route::resource('/category', CategoryController::class);
// Route::get('/category', [CategoryController::class, 'index'])->name('admin.test');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
