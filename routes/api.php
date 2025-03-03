<?php

use App\Http\Controllers\Api\V1\Admin\CategoryController;
use App\Http\Controllers\Api\V1\Admin\ChildCategoryController;
use App\Http\Controllers\Api\V1\Admin\SettingsController;
use App\Http\Controllers\Api\V1\Admin\SubCategoryController;
use App\Http\Controllers\Api\V1\Admin\VendorController;
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
        'vendor' => VendorController::class,
    ]);

    /**
     * routes out of resources methods
     */
    Route::post('/vendor/upload', [VendorController::class, 'uploadVendorCSV']);
    Route::get('/settings/refresh-database', [SettingsController::class, 'refreshDatabase']);
});
