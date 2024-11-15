<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddOnServiceHotels extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'add_ons_service_hotel_id',
    ];

    // Relationship with Hotel (many-to-many)
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    // Relationship with AddOnServiceHotel (many-to-many)
    public function addOnServiceHotel()
    {
        return $this->belongsTo(AddOnServiceHotel::class, 'add_ons_service_hotel_id');
    }
}
