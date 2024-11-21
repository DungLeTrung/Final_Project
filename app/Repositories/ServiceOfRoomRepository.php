<?php

namespace App\Repositories;

use App\Models\ServiceOfRoom;

class ServiceOfRoomRepository
{
    protected $roomService;

    public function __construct(ServiceOfRoom $roomService)
    {
        $this->roomService = $roomService;
    }

    public function getAll()
    {
        return $this->roomService->all();
    }

    public function find($id)
    {
        return $this->roomService->find($id);
    }

    public function create(array $data)
    {
        return $this->roomService->create($data);
    }

    public function update(ServiceOfRoom $roomService, array $data)
    {
        return $roomService->update($data);
    }

    public function delete(ServiceOfRoom $roomService)
    {
        return $roomService->delete();
    }
}
