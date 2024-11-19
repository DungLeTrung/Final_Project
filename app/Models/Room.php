<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'number_of_people',
        'number_of_bed',
        'image',
        'description',
        'room_price',
        'area',
        'room_type',
        'room_rule',
    ];

    protected $casts = [
        'room_rule' => 'array',
    ];

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotel_rooms');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function services()
    {
        return $this->belongsToMany(ServiceOfRoom::class, 'room_service');
    }

    public function images()
    {
        return $this->hasMany(AlbumImage::class);
    }
}
