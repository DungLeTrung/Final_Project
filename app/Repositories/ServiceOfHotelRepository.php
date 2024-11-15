<?php

namespace App\Repositories;

use App\Models\ServiceOfHotel;

class HotelServiceRepository
{
    protected $hotelService;

    public function __construct(ServiceOfHotel $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    public function all()
    {
        return $this->hotelService->all();
    }

    public function find($id)
    {
        return $this->hotelService->find($id);
    }

    public function create(array $data)
    {
        return $this->hotelService->create($data);
    }

    public function update(ServiceOfHotel $hotelService, array $data)
    {
        return $hotelService->update($data);
    }

    public function delete(ServiceOfHotel $hotelService)
    {
        return $hotelService->delete();
    }
}
