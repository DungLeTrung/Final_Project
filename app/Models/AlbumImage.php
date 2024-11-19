<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumImage extends Model
{
    use HasFactory;

    protected $fillable = ['tour_id', 'hotel_id', 'room_id', 'url'];

    // Relation with Tour
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    // Relation with Hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    // Relation with Room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}

