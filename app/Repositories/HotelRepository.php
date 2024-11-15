<?php

namespace App\Repositories;

use App\Models\Hotel;

class HotelRepository
{
    protected $hotel;

    public function __construct(Hotel $hotel)
    {
        $this->hotel = $hotel;
    }

    public function all()
    {
        return $this->hotel->all();
    }

    public function find($id)
    {
        return $this->hotel->find($id);
    }

    public function create(array $data)
    {
        return $this->hotel->create($data);
    }

    public function update(Hotel $hotel, array $data)
    {
        return $hotel->update($data);
    }

    public function delete(Hotel $hotel)
    {
        return $hotel->delete();
    }
}
