<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bus_number',
        'no_of_seat',
        'route_from',
        'route_to',
        'price',
        'departure_date',
        'departure_time',
        'arrival_time'
    ];
}
