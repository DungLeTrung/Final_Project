<?php

namespace App\Repositories;

use App\Models\Destination;

class DestinationRepository
{
    protected $destination;

    public function __construct(Destination $destination)
    {
        $this->destination = $destination;
    }

    public function all()
    {
        return $this->destination->all();
    }

    public function find($id)
    {
        return $this->destination->find($id);
    }

    public function create(array $data)
    {
        return $this->destination->create($data);
    }

    public function update(Destination $destination, array $data)
    {
        return $destination->update($data);
    }

    public function delete(Destination $destination)
    {
        return $destination->delete();
    }
}
