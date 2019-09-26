<?php

namespace App\Listeners;

use App\Events\ContactUsPosted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContactUsMail;

class SendEmailAndNotificationToTheAdminEmailAddressOrDataBase
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactUsPosted  $event
     * @return void
     */
    public function handle(ContactUsPosted $event)
    {
        Mail::to(config('mail.MAIL_SEND_TO'))->send(new SendContactUsMail($event->contact_us));
    }
}
