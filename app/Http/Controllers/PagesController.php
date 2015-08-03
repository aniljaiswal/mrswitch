<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Subscriber;
use App\Jobs\SendNewsletterSubscribedEmail;
use App\Jobs\SendContactFormEmail;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    /**
     * Display the about us page.
     *
     * @return Response
     */
    public function about()
    {
        $title = 'Mr. Switch | About us';
        return view('pages.about', compact('title'));
    }

    /**
     * Show the form for Contact Us Page.
     *
     * @return Response
     */
    public function getContact()
    {
        $title = 'Mr. Switch | Contact us';
        return view('pages.contact', compact('title'));
    }

    /**
     * Sends a newly submitted contact us form through email.
     * @param Request $request
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
        $title = 'Mr. Switch | Privacy Policy';
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
        $title = 'Mr. Switch | Cancellations and Refunds';
        return view('pages.refunds', compact('title'));
    }

    /**
     * Display the pricing information page
     *
     * @return Response
     */
    public function pricing()
    {
        $title = 'Mr. Switch | Learn more about Pricing';
        return view('pages.pricing', compact('title'));
    }


    /**
     * Subscribe the user and sends an email
     * @param  Request $request
     * @return status
     */
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

    /**
     *  Show the careers page
     */
    public function careers()
    {
        return view('pages.careers')->with('title', 'Join the Team | Mr. Switch - Careers');
    }
}