<?php

namespace App\Repositories;

use App\Models\AlbumImage;
use App\Models\Tour;

class TourRepository
{
    protected $tour;
    protected $album_image;

    public function __construct(Tour $tour, AlbumImage $album_image)
    {
        $this->tour = $tour;
        $this->album_image = $album_image;
    }

    public function getAll()
    {
        return $this->tour->all();
    }

    public function find($id)
    {
        return $this->tour->find($id);
    }

    public function getTourDetails($id)
    {
        return $this->tour->with(['services', 'images'])->findOrFail($id);
    }

    public function attachTourTypes(Tour $tour, array $tourTypes)
    {
        if (!empty($tourTypes)) {
            $tour->tourTypes()->attach($tourTypes);
        }
    }

    public function attachFaqs(Tour $tour, array $faq)
    {
        if (!empty($faq)) {
            $tour->faqs()->attach($faq);
        }
    }

    public function saveGalleryImages($galleryImages, $tourId)
    {
        $imagePaths = [];
        foreach ($galleryImages as $image) {
            $imagePaths[] = $image->store('public/gallery');
        }

        foreach ($imagePaths as $path) {
            $this->album_image->create([
                'tour_id' => $tourId,
                'image_url' => $path,
            ]);
        }
    }

    public function create(array $data)
    {
        return $this->tour->create($data);
    }

    public function update(Tour $tour, array $data)
    {
        return $tour->update($data);
    }

    public function delete(Tour $tour)
    {
        return $tour->delete();
    }

    public function findTourById($id)
    {
        return $this->tour->findOrFail($id);
    }

    public function deleteTourWithRelatedData($tour)
    {
        return $tour->delete();
    }
}
