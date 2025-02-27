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
        Artisan::call('optimize:clear'); // Clears cache, config, routes, and views
        Artisan::call('migrate:fresh', ['--force' => true]); // Drops all tables and re-runs migrations

        return ApiResponseClass::sendResponse(null, 'Database refreshed and cache cleared successfully', 200);
    }
}
