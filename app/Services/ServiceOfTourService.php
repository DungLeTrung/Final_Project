<?php

namespace App\Services;

use App\Repositories\ServiceOfTourRepository;

class ServiceOfTourService
{
    protected $serviceOfTour;

    public function __construct(ServiceOfTourRepository $serviceOfTour)
    {
        $this->serviceOfTour = $serviceOfTour;
    }

    public function listService()
    {
        return $this->serviceOfTour->getAll();
    }

    public function createOrUpdateService($data)
    {
        try {
            $validatedData = [
                'service' => $data['service'],
            ];

            if (isset($data['id']) && $data['id']) {
                $service = $this->serviceOfTour->find($data['id']);
                $service = $this->serviceOfTour->update($service, $validatedData);

                return [
                    'message' => 'Service updated successfully!',
                    'service' => $service,
                    'status' => 200,
                ];
            } else {
                $service = $this->serviceOfTour->create($validatedData);

                return [
                    'message' => 'Service created successfully!',
                    'service' => $service,
                    'status' => 201,
                ];
            }
        } catch (\Exception $e) {
            return [
                'message' => 'Error processing Service',
                'error' => $e->getMessage(),
                'status' => 500,
            ];
        }
    }

    public function deleteService($id)
    {
        try {
            $service = $this->serviceOfTour->find($id);

            if ($service) {
                $service->delete();
                return [
                    'message' => 'Service deleted successfully!',
                ];
            }

            return [
                'message' => 'Service not found!',
            ];
        } catch (\Exception $e) {
            return [
                'message' => 'Error deleting Service',
                'error' => $e->getMessage(),
            ];
        }
    }
}
