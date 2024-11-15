<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hotel_id',
        'tour_id',
        'rating',
        'comment',
    ];

    // Define the relationship with the User model (each review belongs to one user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Hotel model (each review can belong to one hotel)
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    // Define the relationship with the Tour model (each review can belong to one tour)
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function rating()
    {
        return $this->hasOne(Rating::class, 'review_id');
    }
}
