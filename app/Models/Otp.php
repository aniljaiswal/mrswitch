<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use SMS;

class Otp extends Model
{
    use softDeletes;

    protected $dates = ['expires_at', 'deleted_at'];


    protected $fillable = ['mobile', 'otp', 'expires_at'];


    /**
     * Check if OTP exists & matches for given Mobile
     *
     * @param string $mobile
     * @param int $otp
     * @return boolean
     */
    public static function matches($mobile, $otp)
    {
        return !self::exists($mobile)->whereOtp($otp)->get()->isEmpty();
    }

    /**
     * Generate OTP for given Mobile
     *
     * @param string $mobile
     * @param int $otp
     * @return boolean
     */
    public static function generate($mobile)
    {
        $newOtp = self::create(['mobile' => $mobile, 'otp' => mt_rand(100000, 999999)]);

        if($newOtp && self::sendOtp($mobile, $newOtp->otp))
            return array('status' => "success");
        else
            return array('status' => "failed");
    }

    /**
     * Resend OTP for given Mobile
     *
     * @param string $mobile
     * @param int $otp
     * @return boolean
     */
    public static function resend($mobile)
    {
        return array('status' => self::sendOtp($mobile, self::exists($mobile)->first()->otp));
    }

    /**
     * Send OTP using SMS service for given Mobile
     *
     * @param string $mobile
     * @param int $otp
     * @return boolean
     */
    protected static function sendOtp($mobile, $otp)
    {
        SMS::send('sms/otp', ['otp' => $otp], function($sms) use($mobile){
            $sms->to($mobile);
        });
        return "success";
    }

    public function scopeExists($query, $mobile)
    {
        return $query->whereMobile($mobile);
    }
}
