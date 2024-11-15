<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating_point',
        'total_review',
        'review_id',
    ];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
