<?php

namespace App\Repositories;

use App\Models\RoomType;

class RoomTypeRepository
{
    protected $roomtype;

    public function __construct(RoomType $roomtype)
    {
        $this->roomtype = $roomtype;
    }

    public function all()
    {
        return $this->roomtype->all();
    }

    public function find($id)
    {
        return $this->roomtype->find($id);
    }

    public function create(array $data)
    {
        return $this->roomtype->create($data);
    }

    public function update(RoomType $roomtype, array $data)
    {
        return $roomtype->update($data);
    }

    public function delete(RoomType $roomtype)
    {
        return $roomtype->delete();
    }
}
