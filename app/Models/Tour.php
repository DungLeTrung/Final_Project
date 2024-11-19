<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';

    protected $fillable = [
        'name',
        'number_of_guests',
        'departure_time',
        'departure_point',
        'duration',
        'address',
        'image',
        'description',
        'tour_price',
        'tour_type',
        'tour_rule',
        'faq',
        'destination_id',
    ];

    protected $casts = [
        'departure_time' => 'datetime',
        'tour_price' => 'decimal:2',
        'tour_rule' => 'array',
        'faq' => 'integer',
        'destination_id' => 'integer',
    ];

    public function tourType()
    {
        return $this->belongsTo(TourType::class, 'tour_type', 'id');
    }

    public function services()
    {
        return $this->belongsToMany(ServiceOfTour::class, 'tour_service');
    }

    public function faqs()
    {
        return $this->hasMany(TourFaq::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function itinerary()
    {
        return $this->hasMany(TourItinerary::class);
    }

    public function images()
    {
        return $this->hasMany(AlbumImage::class);
    }
}
