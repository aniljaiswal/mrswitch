<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, EntrustUserTrait, softDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'email_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'email_token', 'email_verified'];

    /**
     * Get the bookings for the user.
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }

    /**
     * Save an email verification token with Model Events
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function($user){

            $user->email_token = str_random(30);

        });
    }

    /**
     * set user email verification to true and nullify the email token
     */
    public function setEmailVerified()
    {
        $this->email_verified = 1;
        $this->email_token = null;
        $this->save();

        return $this;
    }

    /**
     *
     */
    public function changePendingUserToConfirmed()
    {
        $this->detachRole(Role::where('name', '=', 'pending')->first());
        $this->attachRole(Role::where('name', '=', 'confirmed')->first());

        return $this;
    }

    public function isEmailVerified()
    {
        return $this->email_verified && is_null($this->email_token);
    }
}
