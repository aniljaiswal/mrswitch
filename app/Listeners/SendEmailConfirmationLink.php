<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Contracts\Mail\Mailer;

class SendEmailConfirmationLink implements ShouldQueue
{

    protected $mailer;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $this->mailer->send('emails.profile.confirm_email', ['user' => $event->user], function ($message) use ($event){

            $message->from(config('mail.from.address'), config('mail.from.name'));

            $message->subject('Please confirm your email address');

            $message->to($event->user->email);

        });
    }
}
