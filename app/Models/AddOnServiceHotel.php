<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddOnServiceHotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'price',
    ];

    public function addOnServiceHotels()
    {
        return $this->hasMany(AddOnServiceHotel::class, 'add_ons_service_hotel_id');
    }

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'add_ons_service', 'add_ons_service_hotel_id', 'booking_id');
    }

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'add_ons_service_hotels', 'add_ons_service_hotel_id', 'hotel_id');
    }
}
