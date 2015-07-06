<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Subscriber;
use App\Jobs\SendNewsletterSubscribedEmail;
use App\Jobs\SendContactFormEmail;

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
        $title = 'Contact us | Mr. Switch';
        return view('pages.contact', compact('title'));
    }

    /**
     * Sends a newly submitted contact us form through email.
     *
     * @return Response
     */
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required|max:100',
            'message' => 'required'
        ]);

        $details =  array(  'name' => $request->get('name'),
                            'email' => $request->get('email'),
                            'user_message' => $request->get('message')
                        );

        $this->dispatch(new SendContactFormEmail($details));

        return redirect('contact')->with('status', 'Your message has been sent! We\'ll be in touch shortly.');
    }

    /**
     * Display the privacy page.
     *
     * @return Response
     */
    public function privacy()
    {
        $title = 'Mr. Switch | Privacy Poliy';
        return view('pages.privacy', compact('title'));
    }

    /**
     * Display the terms and conditions page
     *
     * @return Response
     */
    public function terms()
    {
        $title = 'Mr. Switch | Terms of Service';
        return view('pages.terms', compact('title'));
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
        $title = 'Learn about Pricing and plans | Mr. Switch';
        return view('pages.pricing', compact('title'));
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