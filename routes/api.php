<?php

use App\Http\Controllers\Api\V1\Admin\AdminProfileController;
use App\Http\Controllers\Api\V1\Admin\AttributeController;
use App\Http\Controllers\Api\V1\Admin\AttributeValueController;
use App\Http\Controllers\Api\V1\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Api\V1\Admin\BrandController;
use App\Http\Controllers\Api\V1\Admin\CategoryController;
use App\Http\Controllers\Api\V1\Admin\ChildCategoryController;
use App\Http\Controllers\Api\V1\Admin\ProductController;
use App\Http\Controllers\Api\V1\Admin\SettingsController;
use App\Http\Controllers\Api\V1\Admin\SubCategoryController;
use App\Http\Controllers\Api\V1\Admin\VendorController;
use App\Http\Controllers\Api\V1\Auth\AuthenicationController;
use App\Http\Controllers\Api\V1\Customer\Auth\CustomerAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Admin routes
Route::post('admin/register', [AdminAuthController::class, 'register']);
Route::post('admin/login', [AdminAuthController::class, 'login']);

// Admin Routes
Route::prefix('admin')->middleware('auth:admin-api')->group(function () {

    // authentication routes
    Route::post('/logout', [AuthenicationController::class, 'logout']);

    Route::apiResources([
        'profile' => AdminProfileController::class,
        'category' => CategoryController::class,
        'sub-category' => SubCategoryController::class,
        'child-category' => ChildCategoryController::class,
        'attribute' => AttributeController::class,
        'attribute-value' => AttributeValueController::class,
        'brand' => BrandController::class,
        'vendor' => VendorController::class,
        'product' => ProductController::class,
    ]);

    /**
     * routes out of resources methods test
     */
    Route::post('/vendor/upload', [VendorController::class, 'uploadVendorCSV']);
    Route::get('/settings/refresh-database', [SettingsController::class, 'refreshDatabase']);
});


// Customer routes
Route::post('register', [CustomerAuthController::class, 'register']);
Route::prefix('/')->middleware('auth:sanctum')->group(function () {

    // Route::apiResources([]);
});
