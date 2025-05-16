<?php

namespace App\Jobs;

use App\Models\Vendor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
        // Path to the file
        $fullPath = storage_path('app/private/uploads/vendors/'.$this->filePath);

        if (! file_exists($fullPath)) {
            Log::error("[Vendor CSV Upload] File not found: {$fullPath}");

            return;
        }

        // Reading the file
        $rows = array_map('str_getcsv', file($fullPath));
        $header = array_map('trim', $rows[0]);
        $validRows = [];
        $errors = [];

        foreach (array_slice($rows, 1) as $index => $row) {
            $lineNumber = $index + 2;  // +2 because first line is the header
            $vendorData = array_combine($header, array_map('trim', $row));

            // Skip empty or malformed rows
            if (! $vendorData) {
                $errors[] = ['row' => $lineNumber, 'reason' => 'Malformed row or header mismatch.'];

                continue;
            }

            // Handle missing fields (e.g., email, phone, status)
            if (empty($vendorData['email']) || empty($vendorData['phone'])) {
                $errors[] = ['row' => $lineNumber, 'reason' => 'Missing email or phone.'];

                continue;
            }

            // Set default values for missing fields if needed
            if (empty($vendorData['status'])) {
                $vendorData['status'] = 'pending'; // Default status
            }

            // Generate password for the vendor
            $vendorData['password'] = bcrypt(Str::random(10));

            // Run validation on the data (email, phone, etc.)
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
                    'reason' => 'Validation failed: '.implode('; ', $validator->errors()->all()),
                ];

                continue;
            }

            // If validation passes, add the row to valid rows array
            $validRows[] = $vendorData;
        }

        // Bulk insert all valid rows into the database
        if (count($validRows) > 0) {
            Vendor::insert($validRows);  // Bulk insert
            Log::info('[Vendor CSV Upload] Bulk insert of '.count($validRows).' vendors completed.');
        }

        // If there are errors, log them
        if (! empty($errors)) {
            $failedFileName = 'failed_uploads_'.now()->format('Ymd_His').'.csv';
            $failedFilePath = storage_path('app/private/uploads/vendors/'.$failedFileName);

            // Open a file for writing
            $handle = fopen($failedFilePath, 'w');

            // Write the header
            fputcsv($handle, ['Row', 'Reason']);

            // Write each error row
            foreach ($errors as $error) {
                fputcsv($handle, [$error['row'], $error['reason']]);
            }

            fclose($handle);

            Log::info("[Vendor CSV Upload] Failed rows saved to {$failedFileName}");
        }

        // Cleanup: delete the file after processing
        unlink($fullPath);
    }
}
