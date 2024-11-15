<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOfHotel extends Model
{
    use HasFactory;

    protected $table = 'services_of_hotel';

    // Define the fillable attributes
    protected $fillable = [
        'service',
    ];

    // Define the relationship with the Hotel model (many-to-many)
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotel_service');
    }
}
