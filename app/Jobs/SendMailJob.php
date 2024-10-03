<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $request;

    /**
     * Create a new job instance.
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     */
    public function handle($request): void
    {
        Mail::to($this->request->email)->send(new UserMail($this->request));
    }
}
