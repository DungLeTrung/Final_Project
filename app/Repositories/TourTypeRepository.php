<?php

namespace App\Repositories;

use App\Models\TourType;

class TourTypeRepository
{
    protected $tourtype;

    public function __construct(TourType $tourtype)
    {
        $this->tourtype = $tourtype;
    }

    public function all()
    {
        return $this->tourtype->all();
    }

    public function find($id)
    {
        return $this->tourtype->find($id);
    }

    public function create(array $data)
    {
        return $this->tourtype->create($data);
    }

    public function update(TourType $tourtype, array $data)
    {
        return $tourtype->update($data);
    }

    public function delete(TourType $tourtype)
    {
        return $tourtype->delete();
    }
}
