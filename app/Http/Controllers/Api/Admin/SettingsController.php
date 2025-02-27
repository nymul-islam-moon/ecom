<?php

namespace App\Http\Controllers\Api\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SettingsController extends Controller
{

    public function refreshDatabase()
    {
        Artisan::call('optimize:clear');
        Artisan::call('migrate:fresh', ['--force' => true]);

        return ApiResponseClass::sendResponse(null, 'Database refreshed and cache cleared successfully', 200);
    }
}
