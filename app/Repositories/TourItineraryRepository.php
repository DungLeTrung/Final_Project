<?php

namespace App\Repositories;

use App\Models\TourItinerary;

class TourItineraryRepository
{
    protected $tourItinerary;

    public function __construct(TourItinerary $tourItinerary)
    {
        $this->tourItinerary = $tourItinerary;
    }

    public function getAll()
    {
        return $this->tourItinerary->all();
    }

    public function find($id)
    {
        return $this->tourItinerary->find($id);
    }

    public function create(array $data)
    {
        return $this->tourItinerary->create($data);
    }

    public function update(TourItinerary $tourItinerary, array $data)
    {
        return $tourItinerary->update($data);
    }

    public function delete(TourItinerary $tourItinerary)
    {
        return $tourItinerary->delete();
    }
}
