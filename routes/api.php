<?php

use App\Http\Controllers\Api\V1\Admin\AttributeController;
use App\Http\Controllers\Api\V1\Admin\AttributeValueController;
use App\Http\Controllers\Api\V1\Admin\BrandController;
use App\Http\Controllers\Api\V1\Admin\CategoryController;
use App\Http\Controllers\Api\V1\Admin\ChildCategoryController;
use App\Http\Controllers\Api\V1\Admin\ProductController;
use App\Http\Controllers\Api\V1\Admin\SettingsController;
use App\Http\Controllers\Api\V1\Admin\SubCategoryController;
use App\Http\Controllers\Api\V1\Admin\VendorController;
use App\Http\Controllers\Api\V1\Auth\AuthenicationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Admin routes
Route::post('admin/register', [AuthenicationController::class, 'register']);
Route::post('admin/login', [AuthenicationController::class, 'login']);
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {

    // authentication routes
    Route::post('/logout', [AuthenicationController::class, 'logout']);

    Route::apiResources([
        'category' => CategoryController::class,
        'sub-category' => SubCategoryController::class,
        'child-category' => ChildCategoryController::class,
        'vendor' => VendorController::class,
        'brand' => BrandController::class,
        'attribute' => AttributeController::class,
        'attribute-value' => AttributeValueController::class,
        'product' => ProductController::class,
    ]);

    // Additional admin routes
    Route::post('/vendor/upload', [VendorController::class, 'uploadVendorCSV']);
    Route::get('/settings/refresh-database', [SettingsController::class, 'refreshDatabase']);
});
