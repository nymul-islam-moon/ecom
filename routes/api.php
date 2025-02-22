<?php

use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\Admin\ChildCategoryController;
use App\Http\Controllers\Api\Admin\SubCategoryController;
use App\Http\Controllers\Api\Admin\VendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::apiResources([
        'category' => CategoryController::class,
        'sub-category' => SubCategoryController::class,
        'child-category' => ChildCategoryController::class,
        'venodr' => VendorController::class,
    ]);
});
