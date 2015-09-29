<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('profile.index')->with('title', 'Your Profile - Mr Switch');
	}

	public function setup()
	{
		return view('profile.setup')->with('title', 'Complete your profile - Mr. Switch');
	}

	public function completeSetup(Request $request)
	{
		
	}
}
