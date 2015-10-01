<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Booking;

class SendBookingConfirmationEmail extends Job implements SelfHandling
{
    use InteractsWithQueue, SerializesModels;

    /**
     * @var App\Models\Booking $booking
     */
    protected $booking;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('emails.bookings.confirmed', ['booking' => $this->booking], function($message){

            $message->from(config.get('mail.from.address'), config.get('mail.from.name'));

            $message->subject('Your Booking #: ' . $this->booking->id . ' is confirmed');

            $message->to($this->booking->user->email);
        });
    }
}
