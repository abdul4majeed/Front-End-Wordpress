<?php

namespace App\Listeners;

use App\Events\CareerMessagePosted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\careermail;
use Illuminate\Support\Facades\Mail;

class SendMailOrDatabaseNotificationToTheAdminWhenCareerMessagePosted
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
     * @param  CareerMessagePosted  $event
     * @return void
     */
    public function handle(CareerMessagePosted $event)
    {
        Mail::to(config('mail.MAIL_SEND_TO'))->send(new careermail($event->career));
    }
}
