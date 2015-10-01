<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use Bugsnag;

class ProfileController extends Controller
{

	public function index()
	{
		return view('profile.index')->with('title', 'Your Profile - Mr Switch');
	}

	public function setup(Request $request)
	{
		$user = auth()->user();

		if(!auth()->user()->roles->isEmpty() && !$user->hasRole('pending'))
		{
			return redirect('profile/index');
		}

		if(!$user->isEmailVerified())
		{
			if(is_null($request->tkn))
			{
				Auth::logout();

				return redirect('auth/login')
					->withErrors('Please check your email for cofirmation link.');
			}

			$pendingUser = User::whereEmailToken($request->tkn)
								->firstOrFail()->setEmailVerified();
		}

		$request->session()->flash('email_verified', 'true');

		$title = 'Complete your profile - Mr. Switch';

		return view('profile.setup', compact('user', 'title'));
	}

	public function completeSetup(Request $request)
	{
		dump($request->all());
		dd('bingo!');
	}
}
