<?php

namespace App\Jobs;

use App\Models\Subscriber;
use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewsletterSubscribedEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $subscriber;

    /**
     * Create a new job instance.
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Execute the job.
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('emails.newsletters.subscribed', ['subscriber' => $this->subscriber], function($message){

            $message->from(config.get('mail.from.address'), config.get('mail.from.name'));

            $message->subject('Your newsletter subscription is confirmed');

            $message->to($this->subscriber->email);
        });
    }
}
