<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Otp;

class OtpController extends Controller
{
    /**
     * Confirm the user specified OTP with database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobile = $request->mobile;

        $otp = $request->otp;

        if( !$mobile || !$otp)
        {
            return response()->json('Failed', 403);
        }

        $matches = Otp::matches($mobile, $otp);

        if($matches)
        {
            $confirmMobile = Otp::whereMobile($mobile)->first();
            $confirmMobile->confirmed = 1;
            $confirmMobile->save();

            return response()->json('Mobile Confirmed');
        }
        else
        {
            return response()->json('Otp doesn\'t match', 403);
        }
    }

    /**
     * Generate the OTP for specified mobile number
     *
     * @param  string  $mobile
     * @return \Illuminate\Http\Response
     */
    public function show($mobile)
    {
        if(strlen($mobile) != 10 && is_nan($mobile))
        {
            return response()->json('failure', 403);
        }

        $empty = Otp::exists($mobile)->get()->isEmpty();

        if($empty)
            return response()->json(Otp::generate($mobile));
        else
            return response()->json(Otp::resend($mobile));
    }
}
