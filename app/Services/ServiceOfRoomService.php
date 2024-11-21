<?php

namespace App\Services;

use App\Repositories\ServiceOfRoomRepository;

class ServiceOfRoomService
{
    protected $serviceOfRoom;

    public function __construct(ServiceOfRoomRepository $serviceOfRoom)
    {
        $this->serviceOfRoom = $serviceOfRoom;
    }

    public function listService()
    {
        return $this->serviceOfRoom->getAll();
    }

    public function createOrUpdateService($data)
    {
        try {
            $validatedData = [
                'service' => $data['service'],
            ];

            if (isset($data['id']) && $data['id']) {
                $service = $this->serviceOfRoom->find($data['id']);
                $service = $this->serviceOfRoom->update($service, $validatedData);

                return [
                    'message' => 'Service updated successfully!',
                    'service' => $service,
                    'status' => 200,
                ];
            } else {
                $service = $this->serviceOfRoom->create($validatedData);

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
            $service = $this->serviceOfRoom->find($id);

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
