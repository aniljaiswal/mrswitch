<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceStatus extends Model
{
    use SoftDeletes;
    
    protected $table = 'service_status';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['status_code, status_label'];

    /**
     * Scope a query to only return pending status.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('status_code', '=', 'pending')->first();
    }

}
