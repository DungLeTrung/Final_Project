<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $table = 'room_type';

    protected $fillable = ['type']; // e.g., 'Single', 'Double', 'Suite'

    // Define the relationship with Room model
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
