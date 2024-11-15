<?php

namespace App\Repositories;

use App\Models\Tour;

class TourRepository
{
    protected $tour;

    public function __construct(Tour $tour)
    {
        $this->tour = $tour;
    }

    public function all()
    {
        return $this->tour->all();
    }

    public function find($id)
    {
        return $this->tour->find($id);
    }

    public function create(array $data)
    {
        return $this->tour->create($data);
    }

    public function update(Tour $tour, array $data)
    {
        return $tour->update($data);
    }

    public function delete(Tour $tour)
    {
        return $tour->delete();
    }
}
