<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $table = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['service_code, service_label', 'description', 'price'];

    /**
     * Get the bookings for the particular service.
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }

}
