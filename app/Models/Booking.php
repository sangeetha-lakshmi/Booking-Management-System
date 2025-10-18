<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'email',
        'booking_date',
        'service_type',
        'status',
    ];

    protected $casts = [
        'booking_date' => 'date',
    ];
}
