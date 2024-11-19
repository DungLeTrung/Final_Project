<?php

namespace App\Repositories;

use App\Models\TourFaq;

class TourFaqRepository
{
    protected $tourfaq;

    public function __construct(TourFaq $tourfaq)
    {
        $this->tourfaq = $tourfaq;
    }

    public function getAll()
    {
        return $this->tourfaq->all();
    }

    public function find($id)
    {
        return $this->tourfaq->find($id);
    }

    public function create(array $data)
    {
        return $this->tourfaq->create($data);
    }

    public function update(TourFaq $tourfaq, array $data)
    {
        return $tourfaq->update($data);
    }

    public function delete(TourFaq $tourfaq)
    {
        return $tourfaq->delete();
    }
}
