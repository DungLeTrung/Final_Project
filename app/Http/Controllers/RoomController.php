<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomServiceRequest;
use App\Http\Requests\RoomTypeRequest;
use App\Models\AlbumImage;
use App\Models\Room;
use App\Services\RoomService;
use App\Services\RoomTypeService;
use App\Services\ServiceOfRoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    protected $serviceOfRoom;
    protected $roomTypeService;
    protected $roomService;

    public function __construct(ServiceOfRoomService $serviceOfRoom, RoomTypeService $roomTypeService, RoomService $roomService)
    {
        $this->serviceOfRoom = $serviceOfRoom;
        $this->roomTypeService = $roomTypeService;
        $this->roomService = $roomService;
    }

    //Room Management
    public function roomManagement()
    {
        $roomService  = $this->serviceOfRoom->listService();
        $roomType = $this->roomTypeService->listType();
        $rooms = $this->roomService->listRoom();
        return view('admin.room.admin_room', compact('roomType', 'roomService', 'rooms'));
    }

    public function edit($id)
    {
        $roomService  = $this->serviceOfRoom->listService();
        $roomType = $this->roomTypeService->listType();
        $room = $this->roomService->getRoomDetails($id);
        return view('admin.room.modal-update.update_room', compact( 'roomType', 'roomService', 'room'));
    }

    public function create()
    {
        $roomService  = $this->serviceOfRoom->listService();
        $roomType = $this->roomTypeService->listType();
        $rooms = $this->roomService->listRoom();
        return view('admin.room.modal-create.create_room', compact('roomType', 'roomService', 'rooms'));
    }

    // public function saveRoom(Request $request, $id = null)
    // {
    //     DB::beginTransaction();

    //     try {
    //         $response = $this->roomService->saveRoom($id, $request->all());

    //         DB::commit();

    //         return response()->json([
    //             'redirect' => route('room-management'),
    //             'message' => $response['message'],
    //             'room' => $response['room'],
    //         ], 201);
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         return response()->json([
    //             'message' => 'Error saving room',
    //             'error' => $e->getMessage(),
    //         ], 500);
    //     }
    // }

    public function deleteRoom($id)
    {
        try {
            DB::beginTransaction();

            $response = $this->roomService->deleteRoom($id);

            DB::commit();

            return response()->json([
                'message' => $response['message'],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error deleting room',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    //Room Service
    public function roomService()
    {
        try {
            $roomService = $this->serviceOfRoom->listService();
            return view('admin.room.admin_room_service', compact('roomService'));
        } catch (\Exception $e) {
            return view('admin.room.admin_room_service', ['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function createOrUpdateService(RoomServiceRequest $request)
    {
        try {
            DB::beginTransaction();
            $response = $this->serviceOfRoom->createOrUpdateService(
                $request->all()
            );

            DB::commit();

            return response()->json([
                'message' => $response['message'],
                'service' => $response['service'],
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error creating room service',
                'error' => $e->getMessage(),
            ], 201);
        }
    }

    public function deleteService($id)
    {
        try {
            DB::beginTransaction();

            $response = $this->serviceOfRoom->deleteService($id);

            DB::commit();

            return response()->json([
                'message' => $response['message'],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error deleting room service',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    //Room Type
    public function roomType()
    {
        try {
            $roomType = $this->roomTypeService->listType();
            return view('admin.room.admin_room_type', compact('roomType'));
        } catch (\Exception $e) {
            return view('admin.room.admin_room_type', ['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function createOrUpdateType(RoomTypeRequest $request)
    {
        try {
            DB::beginTransaction();
            $response = $this->roomTypeService->createOrUpdateType(
                $request->all()
            );

            DB::commit();

            return response()->json([
                'message' => $response['message'],
                'type' => $response['type'],
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error creating room type',
                'error' => $e->getMessage(),
            ], 201);
        }
    }

    public function deleteType($id)
    {
        try {
            DB::beginTransaction();

            $response = $this->roomTypeService->deleteType($id);

            DB::commit();

            return response()->json([
                'message' => $response['message'],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error deleting room type',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function updateGallery(Request $request, $roomId)
    {
        $room = Room::findOrFail($roomId);
        $request->validate([
            'gallery_images' => 'array|nullable',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $updatedImages = $this->roomService->updateGalleryImages($roomId, $request->file('gallery_images'));

        return response()->json([
            'success' => 'Success',
            'message' => 'Image updated successfully!',
            'images' => $updatedImages,
        ], 200);
    }


    public function deleteImage($roomId, $imageId)
    {
        try {
            $image = AlbumImage::findOrFail($imageId);

            Storage::delete('public/' . $image->url);

            $image->delete();

            return response()->json([
                'message' => 'Image deleted successfully!',
                'success' => true,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting image.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
