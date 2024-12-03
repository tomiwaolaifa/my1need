<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $senderEmail;

    /**
     * Create a new message instance.
     *
     * @param string $senderEmail
     * @return void
     */
    public function __construct($senderEmail)
    {
        $this->senderEmail = $senderEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('My1need Notification')
                    ->view('emails.stay_anon_email');
    }
}