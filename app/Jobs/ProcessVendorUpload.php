<?php

namespace App\Jobs;

use App\Models\Vendor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;



class ProcessVendorUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;

    /**
     * Create a new job instance.
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $fullPath = storage_path('app/private/uploads/vendors/' . $this->filePath);

        if (!file_exists($fullPath)) {
            Log::error("[Vendor CSV Upload] File not found: {$fullPath}");
            return;
        }

        $rows = array_map('str_getcsv', file($fullPath));
        $header = array_map('trim', $rows[0]);
        $errors = [];

        foreach (array_slice($rows, 1) as $index => $row) {
            $lineNumber = $index + 2; // actual line number in CSV
            $vendorData = array_combine($header, array_map('trim', $row));

            if (!$vendorData) {
                $errors[] = [
                    'row' => $lineNumber,
                    'reason' => 'Malformed row or header mismatch.'
                ];
                continue;
            }

            $vendorData['password'] = bcrypt(Str::random(10));

            $validator = Validator::make($vendorData, [
                'name' => 'required|string|max:255',
                'email' => 'nullable|email|unique:vendors,email',
                'phone' => 'required|string|max:15|unique:vendors,phone',
                'company_name' => 'nullable|string|max:255',
                'address' => 'nullable|string',
                'status' => 'required|in:pending,approved,rejected,suspended',
                'logo' => 'nullable|string',
                'cover_image' => 'nullable|string',
                'description' => 'nullable|string',
                'commission' => 'nullable|numeric|min:0|max:100',
                'business_license_number' => 'nullable|string|max:255',
                'business_license_document' => 'nullable|string',
            ]);

            if ($validator->fails()) {
                $errors[] = [
                    'row' => $lineNumber,
                    'reason' => 'Validation failed: ' . implode('; ', $validator->errors()->all())
                ];
                continue;
            }

            try {
                Vendor::create($vendorData);
            } catch (\Exception $e) {
                $errors[] = [
                    'row' => $lineNumber,
                    'reason' => 'DB error: ' . $e->getMessage()
                ];
            }
        }

        // Always delete the file after processing
        unlink($fullPath);

        if (!empty($errors)) {
            Log::warning("[Vendor CSV Upload] Completed with errors", $errors);
        } else {
            Log::info("[Vendor CSV Upload] Completed successfully. All rows inserted.");
        }
    }
}
