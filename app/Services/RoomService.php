<?php

namespace App\Services;

use App\Http\Helpers\Helper;
use App\Models\AlbumImage;
use App\Repositories\RoomRepository;

class RoomService
{
    protected $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function listRoom()
    {
        return $this->roomRepository->getAll();
    }

    public function getRoomDetails($id)
    {
        return $this->roomRepository->getRoomDetails($id);
    }

    // public function saveRoom($id = null, array $data)
    // {
    //     if ($id) {
    //         $room = $this->roomRepository->findRoomById($id);
    //     } else {
    //         $room = new Room();
    //     }

    //     $room->name = $data['name'];
    //     $room->number_of_guests = $data['number_of_guests'];
    //     $room->departure_time = $data['departure_time'];
    //     $room->departure_point = $data['departure_point'];
    //     $room->duration = $data['duration'];
    //     $room->address = $data['address'];
    //     $room->description = $data['description'];
    //     $room->tour_price = $data['tour_price'];
    //     $room->destination_id = $data['destination_id'];
    //     $room->tour_rule = $data['tour_rule'];
    //     $room->tour_type = implode(',', $data['tour_type']);

    //     if (isset($data['image'])) {
    //         $room->image = $this->handleImageUpload($data['image']);
    //     }

    //     $room->save();

    //     $galleryImages = $this->handleGalleryUpload($data['gallery_images'] ?? null);
    //     if ($galleryImages) {
    //         foreach ($galleryImages as $url) {
    //             AlbumImage::create([
    //                 'room_id' => $room->id,
    //                 'url' => $url,
    //             ]);
    //         }
    //     }

    //     if (isset($data['services'])) {
    //         $room->services()->sync($data['services']);
    //     }

    //     return [
    //         'message' => $id ? 'Room updated successfully!' : 'Room created successfully!',
    //         'room' => $room,
    //         'status' => 200,
    //     ];
    // }

    private function handleImageUpload($image)
    {
        return $image ? Helper::uploadFile($image, 'room_images') : null;
    }

    private function handleGalleryUpload($galleryImages)
    {
        if ($galleryImages) {
            return Helper::uploadMultipleFiles($galleryImages, 'room_gallery');
        }

        return [];
    }

    public function deleteRoom($id)
    {
        $room = $this->roomRepository->findRoomById($id);

        $this->roomRepository->deleteRoomWithRelatedData($room);

        return ['message' => 'Room deleted successfully!', 'status' => 200,];
    }

    public function updateGalleryImages($roomId, $galleryImages)
    {
        if ($galleryImages) {
            $uploadedImages = Helper::uploadMultipleFiles($galleryImages, 'room_gallery');

            foreach ($uploadedImages as $imageUrl) {
                AlbumImage::create([
                    'room_id' => $roomId,
                    'url' => $imageUrl,
                ]);
            }

            return AlbumImage::where('room_id', $roomId)->get();
        }

        return [];
    }
}
