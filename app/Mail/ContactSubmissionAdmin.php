<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Markdown;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionAdmin extends Mailable
{
    use SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New contact request from ' . $this->data['name'])
            ->view('emails.contact-admin')
            ->with('data', $this->data);
    }
}
