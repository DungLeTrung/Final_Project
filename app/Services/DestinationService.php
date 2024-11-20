<?php

namespace App\Services;

use App\Repositories\DestinationRepository;

class DestinationService
{
    protected $destination;

    public function __construct(DestinationRepository $destination)
    {
        $this->destination = $destination;
    }

    public function listDestination()
    {
        return $this->destination->getAll();
    }
}
