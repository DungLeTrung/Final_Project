<?php

namespace App\Repositories;

use App\Models\Room;

class RoomRepository
{
    protected $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function all()
    {
        return $this->room->all();
    }

    public function find($id)
    {
        return $this->room->find($id);
    }

    public function create(array $data)
    {
        return $this->room->create($data);
    }

    public function update(Room $room, array $data)
    {
        return $room->update($data);
    }

    public function delete(Room $room)
    {
        return $room->delete();
    }
}
