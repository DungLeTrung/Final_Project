<?php

namespace App\Services;

use App\Repositories\TourItineraryRepository;

class TourItineraryService
{
    protected $tourItineraryRepository;

    public function __construct(TourItineraryRepository $tourItineraryRepository)
    {
        $this->tourItineraryRepository = $tourItineraryRepository;
    }

    public function listItinerary()
    {
        return $this->tourItineraryRepository->getAll();
    }

    public function createOrUpdateItinerary($data)
    {
        try {

            $validatedData = [
                'day' => $data['day'],
                'place' => $data['place'],
                'description' => $data['description'],
                'tour_id' => $data['tour_id'],
            ];

            if (isset($data['id']) && $data['id']) {
                $itinerary = $this->tourItineraryRepository->find($data['id']);
                $itinerary = $this->tourItineraryRepository->update($itinerary, $validatedData);

                return [
                    'message' => 'Itinerary updated successfully!',
                    'itinerary' => $itinerary,
                    'status' => 200,
                ];
            } else {
                $itinerary = $this->tourItineraryRepository->create($validatedData);

                return [
                    'message' => 'Itinerary created successfully!',
                    'itinerary' => $itinerary,
                    'status' => 201,
                ];
            }
        } catch (\Exception $e) {
            return [
                'message' => 'Error processing Itinerary',
                'error' => $e->getMessage(),
                'status' => 500,
            ];
        }
    }

    public function deleteItinerary($id)
    {
        try {
            $itinerary = $this->tourItineraryRepository->find($id);

            if ($itinerary) {
                $itinerary->delete();
                return [
                    'message' => 'Itinerary deleted successfully!',
                ];
            }

            return [
                'message' => 'Itinerary not found!',
            ];
        } catch (\Exception $e) {
            return [
                'message' => 'Error deleting Itinerary',
                'error' => $e->getMessage(),
            ];
        }
    }
}
