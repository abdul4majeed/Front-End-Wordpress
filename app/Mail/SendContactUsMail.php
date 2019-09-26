<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact_us;
    public function __construct($contact_us)
    {
        $this->contact_us = $contact_us;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from($this->contact_us->email);
        $this->replyTo($this->contact_us->email);
        $this->subject('New Message Received');
        return $this->markdown('emails.contactus.mail');
    }
}
