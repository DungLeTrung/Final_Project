<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Helper;
use App\Http\Requests\TourFaqRequest;
use App\Http\Requests\TourRequest;
use App\Http\Requests\TourServiceRequest;
use App\Http\Requests\TourTypeRequest;
use App\Models\AlbumImage;
use App\Models\Tour;
use App\Services\DestinationService;
use App\Services\ServiceOfTourService;
use App\Services\TourService;
use App\Services\TourFaqService;
use App\Services\TourTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    protected $tourFaqService;
    protected $tourTypeService;
    protected $serviceOfTour;
    protected $destinationService;
    protected $tourService;


    public function __construct(TourService $tourService, TourFaqService $tourFaqService, TourTypeService $tourTypeService, ServiceOfTourService $serviceOfTour, DestinationService $destinationService)
    {
        $this->tourService = $tourService;
        $this->tourFaqService = $tourFaqService;
        $this->tourTypeService = $tourTypeService;
        $this->serviceOfTour = $serviceOfTour;
        $this->destinationService = $destinationService;
    }

    //Tour Management
    public function tourManagement()
    {
        $tourService  = $this->serviceOfTour->listService();
        $tourDestination = $this->destinationService->listDestination();
        $tourFaq = $this->tourFaqService->listFaq();
        $tourType = $this->tourTypeService->listType();
        $tours = $this->tourService->listTour();
        return view('admin.tour.admin_tour', compact('tourFaq', 'tourType', 'tourDestination', 'tourService', 'tours'));
    }

    public function edit($id)
    {
        $tourService  = $this->serviceOfTour->listService();
        $tourDestination = $this->destinationService->listDestination();
        $tourFaqs = $this->tourFaqService->listFaq();
        $tourType = $this->tourTypeService->listType();
        $tour = $this->tourService->getTourDetails($id);
        $tourFaq = $tourFaqs->where('tour_id', $tour->id);
        return view('admin.tour.modal-update.update_tour', compact('tourFaq', 'tourType', 'tourDestination', 'tourService', 'tour'));
    }

    public function create()
    {
        $tourService  = $this->serviceOfTour->listService();
        $tourDestination = $this->destinationService->listDestination();
        $tourFaq = $this->tourFaqService->listFaq();
        $tourType = $this->tourTypeService->listType();
        $tours = $this->tourService->listTour();
        return view('admin.tour.modal-create.create_tour', compact('tourFaq', 'tourType', 'tourDestination', 'tourService', 'tours'));
    }

    public function updateTour(Request $request, $id)
    {
        DB::beginTransaction();

        try {

            $response = $this->tourService->updateTour($id, $request->all());

            DB::commit();

            return response()->json([
                'redirect' => route('tour-management'),
                'message' => $response['message'],
                'tour' => $response['tour'],
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error creating tour',
                'error' => $e->getMessage(),
            ], 201);
        }
    }

    public function createTour(TourRequest $request)
    {
        // Bắt đầu transaction
        DB::beginTransaction();

        try {
            $data = $request->all();

            $response = $this->tourService->createTour($data);

            DB::commit();

            return response()->json([
                'message' => $response['message'],
                'tour' => $response['tour'],
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error creating tour',
                'error' => $e->getMessage(),
            ], 201);
        }
    }

    public function deleteTour($id)
    {
        try {
            DB::beginTransaction();

            $response = $this->tourService->deleteTour($id);

            DB::commit();

            return response()->json([
                'message' => $response['message'],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error deleting tour',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function tourItinerary()
    {
        return view('admin.tour.admin_tour_itinerary');
    }

    //Tour FAQ
    public function tourFaq()
    {
        try {
            $tours = $this->tourService->listTour();
            $tourFaq = $this->tourFaqService->listFaq();
            return view('admin.tour.admin_tour_faq', compact('tourFaq', 'tours'));
        } catch (\Exception $e) {
            return view('admin.tour.admin_tour_faq', ['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function createOrUpdateFAQ(TourFaqRequest $request)
    {
        try {
            DB::beginTransaction();
            $response = $this->tourFaqService->createOrUpdateFaq(
                $request->all()
            );

            DB::commit();

            return response()->json([
                'message' => $response['message'],
                'faq' => $response['faq'],
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error creating tour faq',
                'error' => $e->getMessage(),
            ], 201);
        }
    }

    public function deleteFaq($id)
    {
        try {
            DB::beginTransaction();

            $response = $this->tourFaqService->deleteFaq($id);

            DB::commit();

            return response()->json([
                'message' => $response['message'],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error deleting tour faq',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    //Tour Type
    public function tourType()
    {
        try {
            $tourType = $this->tourTypeService->listType();
            return view('admin.tour.admin_tour_type', compact('tourType'));
        } catch (\Exception $e) {
            return view('admin.tour.admin_tour_type', ['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function createOrUpdateType(TourTypeRequest $request)
    {
        try {
            DB::beginTransaction();
            $response = $this->tourTypeService->createOrUpdateType(
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
                'message' => 'Error creating tour type',
                'error' => $e->getMessage(),
            ], 201);
        }
    }

    public function deleteType($id)
    {
        try {
            DB::beginTransaction();

            $response = $this->tourTypeService->deleteType($id);

            DB::commit();

            return response()->json([
                'message' => $response['message'],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error deleting tour type',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    //Tour Service
    public function tourService()
    {
        try {
            $tourService = $this->serviceOfTour->listService();
            return view('admin.tour.admin_tour_service', compact('tourService'));
        } catch (\Exception $e) {
            return view('admin.tour.admin_tour_service', ['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function createOrUpdateService(TourServiceRequest $request)
    {
        try {
            DB::beginTransaction();
            $response = $this->serviceOfTour->createOrUpdateService(
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
                'message' => 'Error creating tour service',
                'error' => $e->getMessage(),
            ], 201);
        }
    }

    public function deleteService($id)
    {
        try {
            DB::beginTransaction();

            $response = $this->serviceOfTour->deleteService($id);

            DB::commit();

            return response()->json([
                'message' => $response['message'],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Error deleting tour service',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateGallery(Request $request, $tourId)
    {
        $tour = Tour::findOrFail($tourId);
        $request->validate([
            'gallery_images' => 'array|nullable',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $updatedImages = $this->tourService->updateGalleryImages($tourId, $request->file('gallery_images'));

        return response()->json([
            'success' => 'Success',
            'message' => 'Image updated successfully!',
            'images' => $updatedImages,
        ], 200);
    }


    public function deleteImage($tourId, $imageId)
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
