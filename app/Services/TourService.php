<?php

namespace App\Services;

use App\Http\Helpers\Helper;
use App\Models\AlbumImage;
use App\Repositories\TourRepository;

class TourService
{
    protected $tourRepository;

    public function __construct(TourRepository $tourRepository)
    {
        $this->tourRepository = $tourRepository;
    }

    public function listTour()
    {
        return $this->tourRepository->getAll();
    }

    public function getTourDetails($id)
    {
        return $this->tourRepository->getTourDetails($id);
    }

    public function createTour(array $data)
    {
        $imagePath = $this->handleImageUpload($data['image'] ?? null);

        $galleryImages = $this->handleGalleryUpload($data['gallery_images'] ?? null);

        $tourData = [
            'name' => $data['name'],
            'number_of_guests' => $data['number_of_guests'],
            'departure_time' => $data['departure_time'],
            'departure_point' => $data['departure_point'],
            'duration' => $data['duration'],
            'address' => $data['address'],
            'description' => $data['description'],
            'tour_price' => $data['tour_price'],
            'destination_id' => $data['destination_id'],
            'tour_rule' => $data['tour_rule'],
            'tour_type' => implode(',', $data['tour_type']),
            'image' => $imagePath
        ];

        $tour = $this->tourRepository->create($tourData);

        $tour->services()->sync($data['services']);

        if ($galleryImages) {
            foreach ($galleryImages as $url) {
                AlbumImage::create([
                    'tour_id' => $tour->id,
                    'url' => $url,
                ]);
            }
        }

        return [
            'message' => 'Tour created successfully!',
            'tour' => $tour,
            'status' => 200,
        ];;
    }

    public function updateTour($id, array $data)
    {
        $tour = $this->tourRepository->findTourById($id);

        $tour->name = $data['name'];
        $tour->number_of_guests = $data['number_of_guests'];
        $tour->departure_time = $data['departure_time'];
        $tour->departure_point = $data['departure_point'];
        $tour->duration = $data['duration'];
        $tour->address = $data['address'];
        $tour->description = $data['description'];
        $tour->tour_price = $data['tour_price'];
        $tour->destination_id = $data['destination_id'];
        $tour->tour_rule = $data['tour_rule'];
        $tour->tour_type = implode(',', $data['tour_type']);
        $tour->faq = implode(',', $data['faq']);

        if (isset($data['image'])) {
            $tour->image = $this->handleImageUpload($data['image']);
        }

        $tour->save();

        $galleryImages = $this->handleGalleryUpload($data['gallery_images'] ?? null);

        if ($galleryImages) {
            foreach ($galleryImages as $url) {
                AlbumImage::create([
                    'tour_id' => $tour->id,
                    'url' => $url,
                ]);
            }
        }

        if (isset($data['services'])) {
            $tour->services()->sync($data['services']);
        }

        return [
            'message' => 'Tour updated successfully!',
            'tour' => $tour,
            'status' => 200,
        ];
    }

    private function handleImageUpload($image)
    {
        return $image ? Helper::uploadFile($image, 'tour_images') : null;
    }

    private function handleGalleryUpload($galleryImages)
    {
        if ($galleryImages) {
            return Helper::uploadMultipleFiles($galleryImages, 'tour_gallery');
        }

        return [];
    }

    public function deleteTour($id)
    {
        $tour = $this->tourRepository->findTourById($id);

        $this->tourRepository->deleteTourWithRelatedData($tour);

        return ['message' => 'Tour deleted successfully!', 'status' => 200,];
    }

    public function updateGalleryImages($tourId, $galleryImages)
    {
        if ($galleryImages) {
            $uploadedImages = Helper::uploadMultipleFiles($galleryImages, 'tour_gallery');

            foreach ($uploadedImages as $imageUrl) {
                AlbumImage::create([
                    'tour_id' => $tourId,
                    'url' => $imageUrl,
                ]);
            }

            return AlbumImage::where('tour_id', $tourId)->get();
        }

        return [];
    }
}
