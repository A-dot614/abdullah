<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionConfirmation extends Mailable
{
    use SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Thanks for contacting Abdullah')
            ->view('emails.contact-user')
            ->with('data', $this->data);
    }
}
