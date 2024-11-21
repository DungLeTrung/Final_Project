<?php

namespace App\Services;

use App\Repositories\RoomTypeRepository;
use App\Repositories\TourTypeRepository;

class RoomTypeService
{
    protected $roomTypeRepository;

    public function __construct(RoomTypeRepository $roomTypeRepository)
    {
        $this->roomTypeRepository = $roomTypeRepository;
    }

    public function listType()
    {
        return $this->roomTypeRepository->getAll();
    }

    public function createOrUpdateType($data)
    {
        try {
            $validatedData = [
                'type' => $data['type'],
            ];

            if (isset($data['id']) && $data['id']) {
                $type = $this->roomTypeRepository->find($data['id']);
                $type = $this->roomTypeRepository->update($type, $validatedData);

                return [
                    'message' => 'Type updated successfully!',
                    'type' => $type,
                    'status' => 200,
                ];
            } else {
                $type = $this->roomTypeRepository->create($validatedData);

                return [
                    'message' => 'Type created successfully!',
                    'type' => $type,
                    'status' => 201,
                ];
            }
        } catch (\Exception $e) {
            return [
                'message' => 'Error processing Type',
                'error' => $e->getMessage(),
                'status' => 500,
            ];
        }
    }

    public function deleteType($id)
    {
        try {
            $type = $this->roomTypeRepository->find($id);

            if ($type) {
                $type->delete();
                return [
                    'message' => 'Type deleted successfully!',
                ];
            }

            return [
                'message' => 'Type not found!',
            ];
        } catch (\Exception $e) {
            return [
                'message' => 'Error deleting Type',
                'error' => $e->getMessage(),
            ];
        }
    }
}
