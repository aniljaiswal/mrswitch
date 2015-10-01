<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class ProfileController extends Controller
{

	public function index()
	{
		return view('profile.index')->with('title', 'Your Profile - Mr Switch');
	}

	public function setup(Request $request)
	{
		$user = auth()->user();

		//If user is not pending, redirect to profile/index
		if(!$user->hasRole('pending'))
		{
			return redirect('profile/index');
		}

		//If user is newly registered and request doesn't not have any token
		if(is_null($request->tkn))
		{
			Auth::logout();

			return redirect('auth/login')->withErrors('Please check your email for cofirmation link.');
		}

		//validate the token and set email_verified to true

		//load the form for completing the profile details


		return view('profile.setup')->with(['title' => 'Complete your profile - Mr. Switch']);
	}

	public function completeSetup(Request $request)
	{

	}
}
