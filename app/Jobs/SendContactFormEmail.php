<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactFormEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $details;

    /**
     * Create a new job instance.
     */
    public function __construct($formDetails)
    {
        $this->details = $formDetails;
    }

    /**
     * Execute the job.
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('emails.contact', $this->details, function($message){
            
            $message->from($this->details['email'], $this->details['name']);

            $message->subject('MrSwitch Contact Form - Entry');

            $message->to("hello@mrswitch.zendesk.com");
        });
    }
}