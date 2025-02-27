<?php

namespace App\Jobs;

use App\Models\Vendor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


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
        // Ensure file exists before proceeding
        if (!file_exists($this->filePath)) {
            \Log::error("CSV file not found: " . $this->filePath);
            return;
        }

        // Read CSV file content
        $csvData = array_map('str_getcsv', file($this->filePath));

        if (empty($csvData)) {
            \Log::error("CSV file is empty: " . $this->filePath);
            return;
        }

        // Extract and validate header
        $header = array_map('trim', $csvData[0]);
        $expectedHeader = ["name", "email", "phone", "status"];

        if ($header !== $expectedHeader) {
            \Log::error("Invalid CSV header. Expected: " . implode(", ", $expectedHeader) . " | Found: " . implode(", ", $header));
            return;
        }

        // Fixed password (hashed)
        $password = Hash::make('YourFixedPassword');

        // Process each vendor (skip first row since it's the header)
        foreach (array_slice($csvData, 1) as $row) {
            if (count($row) !== count($expectedHeader)) {
                \Log::warning("Skipping invalid row: " . json_encode($row));
                continue;
            }

            // Create vendor
            $vendor = Vendor::create([
                'name' => trim($row[0]),
                'email' => trim($row[1]),
                'phone' => trim($row[2]),
                'status' => trim($row[3]),
                'password' => $password,
            ]);

            // Send confirmation mail
            // Mail::to($vendor->email)->send(new VendorConfirmationMail($vendor));
            Log::info("Email Confirmation Message Sent to " . $vendor->email);
        }

        // Delete the file after processing
        unlink($this->filePath);
    }
}
