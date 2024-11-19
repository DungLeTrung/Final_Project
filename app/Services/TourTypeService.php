<?php

namespace App\Services;

use App\Repositories\TourTypeRepository;

class TourTypeService
{
    protected $tourTypeRepository;

    public function __construct(TourTypeRepository $tourTypeRepository)
    {
        $this->tourTypeRepository = $tourTypeRepository;
    }

    public function listType()
    {
        return $this->tourTypeRepository->getAll();
    }

    public function createOrUpdateType($data)
    {
        try {
            $validatedData = [
                'type' => $data['type'],
            ];

            if (isset($data['id']) && $data['id']) {
                $type = $this->tourTypeRepository->find($data['id']);
                $type = $this->tourTypeRepository->update($type, $validatedData);

                return [
                    'message' => 'Type updated successfully!',
                    'type' => $type,
                    'status' => 200,
                ];
            } else {
                $type = $this->tourTypeRepository->create($validatedData);

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
            $type = $this->tourTypeRepository->find($id);

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
