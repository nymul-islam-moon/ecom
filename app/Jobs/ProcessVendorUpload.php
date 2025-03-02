<?php

namespace App\Jobs;

use App\Mail\VendorConfirmationMail;
use App\Mail\VendorUploadErrorMail;
use App\Models\Vendor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
        if (!file_exists($this->filePath)) {
            Log::error('CSV file not found: ' . $this->filePath);
            return;
        }

        $csvData = array_map('str_getcsv', file($this->filePath));

        if (empty($csvData)) {
            Log::error('CSV file is empty: ' . $this->filePath);
            unlink($this->filePath);
            return;
        }

        // Extract headers
        $header = array_map('trim', $csvData[0]);

        // Expected headers
        $expectedHeader = [
            'name',
            'email',
            'phone',
            'password',
            'company_name',
            'address',
            'status',
            'logo',
            'cover_image',
            'description',
            'commission',
            'business_license_number',
            'business_license_document'
        ];

        if ($header !== $expectedHeader) {
            Log::error('Invalid CSV header. Expected: ' . implode(', ', $expectedHeader) . ' | Found: ' . implode(', ', $header));
            unlink($this->filePath);
            return;
        }

        $failedRows = [$header]; // Keep invalid rows with error messages

        foreach (array_slice($csvData, 1) as $row) {
            try {
                if (count($row) !== count($header)) {
                    throw new \Exception('Invalid row structure (column count mismatch)');
                }

                $vendorData = [
                    'name' => trim($row[0]),
                    'email' => isset($row[1]) ? trim($row[1]) : null,
                    'phone' => isset($row[2]) ? trim($row[2]) : null,
                    'password' => isset($row[3]) ? bcrypt(trim($row[3])) : bcrypt('DefaultPassword'),
                    'company_name' => isset($row[4]) ? trim($row[4]) : null,
                    'address' => isset($row[5]) ? trim($row[5]) : null,
                    'status' => isset($row[6]) ? trim($row[6]) : 'pending',
                    'logo' => isset($row[7]) ? trim($row[7]) : null,
                    'cover_image' => isset($row[8]) ? trim($row[8]) : null,
                    'description' => isset($row[9]) ? trim($row[9]) : null,
                    'commission' => isset($row[10]) ? floatval($row[10]) : 0.0,
                    'business_license_number' => isset($row[11]) ? trim($row[11]) : null,
                    'business_license_document' => isset($row[12]) ? trim($row[12]) : null,
                ];

                // **Check for missing required fields**
                if (empty($vendorData['name']) || empty($vendorData['phone']) || empty($vendorData['password'])) {
                    throw new \Exception('Missing required fields: name, phone, or password');
                }

                // **Check for duplicate email or phone**
                if (Vendor::where('email', $vendorData['email'])->exists()) {
                    throw new \Exception('Duplicate email found: ' . $vendorData['email']);
                }
                if (Vendor::where('phone', $vendorData['phone'])->exists()) {
                    throw new \Exception('Duplicate phone found: ' . $vendorData['phone']);
                }

                // **Insert vendor into database**
                Vendor::create($vendorData);
            } catch (QueryException $qe) {
                Log::error('Database error: ' . $qe->getMessage());
                $row[] = 'Database error: ' . $qe->getMessage();
                $failedRows[] = $row;
            } catch (\Exception $e) {
                Log::warning('Error processing row: ' . json_encode($row) . ' | Error: ' . $e->getMessage());
                $row[] = 'Error: ' . $e->getMessage();
                $failedRows[] = $row;
            }
        }

        // **If errors exist, email the failed rows**
        if (count($failedRows) > 1) { // More than just headers
            $failedFilePath = storage_path('app/tmp/failed_' . basename($this->filePath));

            $fp = fopen($failedFilePath, 'w');
            foreach ($failedRows as $line) {
                fputcsv($fp, $line);
            }
            fclose($fp);

            Mail::to('admin@gmail.com')->send(new VendorUploadErrorMail($failedFilePath));

            unlink($failedFilePath);
        }

        // **Delete the original file**
        unlink($this->filePath);
    }
}
