<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddOnService extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'add_ons_service_hotel_id',
    ];

    public function addOnServiceHotel()
    {
        return $this->belongsTo(AddOnServiceHotel::class, 'add_ons_service_hotel_id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
