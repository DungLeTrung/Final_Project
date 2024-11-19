<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourFaqRequest;
use App\Http\Requests\TourTypeRequest;
use App\Services\TourFaqService;
use App\Services\TourTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    protected $tourFaqService;
    protected $tourTypeService;


    public function __construct(TourFaqService $tourFaqService, TourTypeService $tourTypeService)
    {
        $this->tourFaqService = $tourFaqService;
        $this->tourTypeService = $tourTypeService;

    }

    public function tourManagement()
    {
        return view('admin.tour.admin_tour');
    }

    public function tourService()
    {
        return view('admin.tour.admin_tour_service');
    }

    public function tourItinerary()
    {
        return view('admin.tour.admin_tour_itinerary');
    }

    //Tour FAQ
    public function tourFaq()
    {
        try {
            $tourFaq = $this->tourFaqService->listFaq();
            return view('admin.tour.admin_tour_faq', compact('tourFaq'));

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
}
