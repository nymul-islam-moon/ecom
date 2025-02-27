<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class SendConfirmationMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $vendor;
    protected string $mailableClass;

    public function __construct($vendor, string $mailableClass)
    {
        $this->vendor = $vendor;
        $this->mailableClass = $mailableClass;
    }

    public function handle()
    {
        if (!class_exists($this->mailableClass)) {
            Log::error("Invalid mailable class: {$this->mailableClass}");
            return;
        }

        Mail::to($this->vendor->email)->send(new $this->mailableClass($this->vendor));
    }
}
