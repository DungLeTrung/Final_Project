<?php

namespace App\Repositories;

use App\Models\ServiceOfTour;

class ServiceOfTourRepository
{
    protected $tourService;

    public function __construct(ServiceOfTour $tourService)
    {
        $this->tourService = $tourService;
    }

    public function getAll()
    {
        return $this->tourService->all();
    }

    public function find($id)
    {
        return $this->tourService->find($id);
    }

    public function create(array $data)
    {
        return $this->tourService->create($data);
    }

    public function update(ServiceOfTour $tourService, array $data)
    {
        return $tourService->update($data);
    }

    public function delete(ServiceOfTour $tourService)
    {
        return $tourService->delete();
    }
}
