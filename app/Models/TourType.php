<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourType extends Model
{
    use HasFactory;

    protected $table = 'tour_type';

    protected $fillable = [
        'type',
    ];

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}
