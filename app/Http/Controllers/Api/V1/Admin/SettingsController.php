<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;


class SettingsController extends Controller
{
    public function refreshDatabase()
    {
        // Define the directories to clean
        $directories = [
            storage_path('app/public'),
            storage_path('app/private'),
        ];

        // Loop through each directory and delete files
        foreach ($directories as $directory) {
            if (File::exists($directory)) {
                File::cleanDirectory($directory); // Deletes all files but not the directory itself
            }
        }

        // Run migrations and clear cache
        Artisan::call('optimize:clear');
        Artisan::call('migrate:fresh', ['--force' => true]);

        return ApiResponseClass::sendResponse(null, 'Database refreshed, cache cleared, and storage cleaned successfully', 200);
    }
}
