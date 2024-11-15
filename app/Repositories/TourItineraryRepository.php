<?php

namespace App\Repositories;

use App\Models\TourItinerary;

class TourItineraryRepository
{
    protected $touritinerary;

    public function __construct(TourItinerary $touritinerary)
    {
        $this->touritinerary = $touritinerary;
    }

    public function all()
    {
        return $this->touritinerary->all();
    }

    public function find($id)
    {
        return $this->touritinerary->find($id);
    }

    public function create(array $data)
    {
        return $this->touritinerary->create($data);
    }

    public function update(TourItinerary $touritinerary, array $data)
    {
        return $touritinerary->update($data);
    }

    public function delete(TourItinerary $touritinerary)
    {
        return $touritinerary->delete();
    }
}
