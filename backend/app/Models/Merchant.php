<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_name',
        'category',
        'address'
    ];
    // app/Models/Merchant.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }
}
