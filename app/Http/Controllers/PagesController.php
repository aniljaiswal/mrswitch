<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Subscriber;
use App\Jobs\SendNewsletterSubscribedEmail;

class PagesController extends Controller
{
    /**
     * Display the about us page.
     *
     * @return Response
     */
    public function about()
    {
        //
    }

    /**
     * Show the form for Contact Us Page.
     *
     * @return Response
     */
    public function getContact()
    {
        //
    }

    /**
     * Sends a newly submitted contact us form throug email.
     *
     * @return Response
     */
    public function postContact()
    {
        //
    }

    /**
     * Display the privacy page.
     *
     * @return Response
     */
    public function privacy()
    {
        //
    }

    /**
     * Display the terms and conditions page
     *
     * @return Response
     */
    public function terms()
    {
        //
    }

    /**
     * Display the refunds and cancellations page
     *
     * @return Response
     */
    public function refunds()
    {
        //
    }

    /**
     * Display the pricing information page
     *
     * @return Response
     */
    public function pricing()
    {
        //
    }


    public function postSubscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:subscribers|max:100'
        ]);

        $subscriber = Subscriber::create($request->all('email'));

        //Queue the newsletter confirmation email
        $this->dispatch(new SendNewsletterSubscribedEmail($subscriber));

        return response()->json(['status' => 'ok']);
    }
}