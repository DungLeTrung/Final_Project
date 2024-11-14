<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminDashboard()
    {
        return view('admin.admin_dashboard');
    }

    public function adminProfile()
    {
        return view('admin.admin_profile');
    }

    public function tourManagement()
    {
        return view('admin.tour.admin_tour');
    }

    public function tourService()
    {
        return view('admin.tour.admin_tour_service');
    }

    public function tourType()
    {
        return view('admin.tour.admin_tour_type');
    }

    public function tourFaq()
    {
        return view('admin.tour.admin_tour_faq');
    }

    public function tourItinerary()
    {
        return view('admin.tour.admin_tour_itinerary');
    }

    public function hotelManagement()
    {
        return view('admin.hotel.admin_hotel');
    }

    public function hotelService()
    {
        return view('admin.hotel.admin_hotel_service');
    }

    public function hotelAddOns()
    {
        return view('admin.hotel.admin_hotel_add_ons');
    }

    public function roomManagement()
    {
        return view('admin.room.admin_room');
    }

    public function roomService()
    {
        return view('admin.room.admin_room_service');
    }

    public function roomType()
    {
        return view('admin.room.admin_room_type');
    }

    public function accountManagement()
    {
        return view('admin.user.admin_account');
    }
}
