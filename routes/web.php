<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'homePage'])->name('home-page');

Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');

Route::get('/list-tour', [HomeController::class, 'listTour'])->name('list-tour');

Route::get('/detail-tour', [HomeController::class, 'detailTour'])->name('detail-tour');

Route::get('/booking-tour', [HomeController::class, 'bookingTour'])->name('booking-tour');

Route::get('/list-hotel', [HomeController::class, 'listHotel'])->name('list-hotel');

Route::get('/booking-hotel', [HomeController::class, 'bookingHotel'])->name('booking-hotel');

Route::get('/detail-hotel', [HomeController::class, 'detailHotel'])->name('detail-hotel');

Route::get('/confirm-booking', [HomeController::class, 'confirmBooking'])->name('confirm-booking');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.execute');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgotPassword');

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('changePassword');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

Route::get('/admin-dashboard', [AdminController::class, 'showAdminDashboard'])->name('admin-dashboard');

Route::get('/admin-profile', [AdminController::class, 'adminProfile'])->name('admin-profile');

//Tour
Route::get('/tour-management', [AdminController::class, 'tourManagement'])->name('tour-management');

Route::get('/tour-service', [AdminController::class, 'tourService'])->name('tour-service');

Route::get('/tour-type', [AdminController::class, 'tourType'])->name('tour-type');

Route::get('/tour-faq', [AdminController::class, 'tourFaq'])->name('tour-faq');

Route::get('/tour-itinerary', [AdminController::class, 'tourItinerary'])->name('tour-itinerary');

//Hotel
Route::get('/hotel-management', [AdminController::class, 'hotelManagement'])->name('hotel-management');

Route::get('/hotel-service', [AdminController::class, 'hotelService'])->name('hotel-service');

Route::get('/hotel-add-ons', [AdminController::class, 'hotelAddOns'])->name('hotel-add-ons');

//Room
Route::get('/room-management', [AdminController::class, 'roomManagement'])->name('room-management');

Route::get('/room-service', [AdminController::class, 'roomService'])->name('room-service');

Route::get('/room-type', [AdminController::class, 'roomType'])->name('room-type');

//User
Route::get('/account-management', [AdminController::class, 'accountManagement'])->name('account-management');
