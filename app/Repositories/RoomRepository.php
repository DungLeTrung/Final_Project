<?php

namespace App\Repositories;

use App\Models\AlbumImage;
use App\Models\Room;

class RoomRepository
{
    protected $room;
    protected $album_image;

    public function __construct(Room $room, AlbumImage $album_image)
    {
        $this->room = $room;
        $this->album_image = $album_image;

    }

    public function getAll()
    {
        return $this->room->all();
    }

    public function find($id)
    {
        return $this->room->find($id);
    }

    public function findRoomById($id)
    {
        return $this->room->findOrFail($id);
    }

    public function deleteRoomWithRelatedData($room)
    {
        return $room->delete();
    }

    public function getRoomDetails($id)
    {
        return $this->room->with(['services', 'images'])->findOrFail($id);
    }

    public function attachRoomTypes(Room $room, array $roomTypes)
    {
        if (!empty($roomTypes)) {
            $room->tourTypes()->attach($roomTypes);
        }
    }

    public function saveGalleryImages($galleryImages, $roomId)
    {
        $imagePaths = [];
        foreach ($galleryImages as $image) {
            $imagePaths[] = $image->store('public/gallery');
        }

        foreach ($imagePaths as $path) {
            $this->album_image->create([
                'room_id' => $roomId,
                'image_url' => $path,
            ]);
        }
    }

    public function create(array $data)
    {
        return $this->room->create($data);
    }

    public function update(Room $room, array $data)
    {
        return $room->update($data);
    }

    public function delete(Room $room)
    {
        return $room->delete();
    }
}
