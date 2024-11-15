<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'arrival',
        'departure',
        'user_id',
        'hotel_id',
        'tour_id',
        'total_price',
        'booking_status',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Hotel model
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    // Define the relationship with the Tour model
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
