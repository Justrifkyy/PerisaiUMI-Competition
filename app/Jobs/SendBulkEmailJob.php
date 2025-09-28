<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\GeneralAnnouncement;
use Illuminate\Support\Collection;

class SendBulkEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $recipients;
    protected $emailSubject;
    protected $emailBody;

    public function __construct(Collection $recipients, string $subject, string $body)
    {
        $this->recipients = $recipients;
        $this->emailSubject = $subject;
        $this->emailBody = $body;
    }

    public function handle(): void
    {
        foreach ($this->recipients as $email) {
            Mail::to($email)->send(new GeneralAnnouncement($this->emailSubject, $this->emailBody));
        }
    }
}
