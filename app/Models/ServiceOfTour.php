<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOfTour extends Model
{
    use HasFactory;

    protected $table = 'services_of_tour';

    protected $fillable = [
        'service',
    ];

    public function tours()
    {
        return $this->belongsToMany(Tour::class, 'tour_service', 'service_id', 'tour_id');
    }
}
