<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class SettingsController extends Controller
{
    public function refreshDatabase()
    {
        Artisan::call('migrate:fresh', ['--force' => true]);
        Artisan::call('optimize:clear');

        return ApiResponseClass::sendResponse(null, 'Database refreshed and cache cleared successfully', 200);
    }
}
