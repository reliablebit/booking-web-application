<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'merchant_id', 'title', 'type', 'price', 'total_seats', 'available_seats', 'start_time', 'location'
    ];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
//    public function merchant()
//    {
//        return $this->belongsTo(Merchant::class);
//    }

}
