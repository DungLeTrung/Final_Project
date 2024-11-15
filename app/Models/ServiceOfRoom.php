<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOfRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'service',
    ];

    // Define the relationship with Room model (many-to-many relationship)
    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'room_service');
    }
}
