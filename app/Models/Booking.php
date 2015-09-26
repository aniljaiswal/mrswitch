<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{

    use SoftDeletes;

    protected $table = 'bookings';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'scheduled_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'scheduled_at', 'service_id', 'comments', 'status'];

    /**
     * Get the User who owns the booking
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the Service detail for this booking
     */
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
