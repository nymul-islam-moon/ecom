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
            Log::error('Vendor data file not found: ' . $this->filePath);
            return;
        }

        $validRows = json_decode(file_get_contents($this->filePath), true);

        foreach ($validRows as $vendorData) {
            try {
                Vendor::create($vendorData);
            } catch (QueryException $qe) {
                Log::error('Database error: ' . $qe->getMessage());
            }
        }

        unlink($this->filePath); // Delete the temp file after processing
    }
}
