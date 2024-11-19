<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    protected $fillable = [
        'name',
        'address',
        'check_in',
        'check_out',
        'number_of_guests',
        'departure_time',
        'departure_point',
        'description',
        'image',
        'hotel_rule',
        'destination_id',
    ];

    protected $casts = [
        'check_in' => 'datetime',
        'check_out' => 'datetime',
        'departure_time' => 'datetime',
        'hotel_rule' => 'array',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function services()
    {
        return $this->belongsToMany(ServiceOfHotel::class, 'hotel_service');
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'hotel_rooms');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function images()
    {
        return $this->hasMany(AlbumImage::class);
    }
}
