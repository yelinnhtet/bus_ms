<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_number',
        'customer_name',
        'phone_number',
        'daparture_date',
        'bus_number',
        'seat_number',
        'total_amount',
        'booking_date',
    ];

    public function buses() {
        return $this->belongsTo('App\Models\Bus','bus_number','bus_number');
    }

}
