<?php

namespace App\Services;

use App\Http\Helpers\Helper;
use App\Models\AlbumImage;
use App\Models\Tour;
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

    public function saveTour($id = null, array $data)
    {
        if ($id) {
            $tour = $this->tourRepository->findTourById($id);
        } else {
            $tour = new Tour();
        }

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

        if (isset($data['image'])) {
            $tour->image = $this->handleImageUpload($data['image']);
        }

        if (isset($data['faq'])) {
            $tour->faq = implode(',', $data['faq']);
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
            'message' => $id ? 'Tour updated successfully!' : 'Tour created successfully!',
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
