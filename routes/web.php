<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.execute');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.execute');

Route::get('/verify-otp', [AuthController::class, 'showOtpVerificationForm'])->name('verify-otp-register');
Route::post('/verify-otp', [AuthController::class, 'verifyOtpRegister'])->name('verify-otp-register.execute');

Route::get('/verify-otp-forgot-password', [AuthController::class, 'showOtpVerificationForgotPasswordForm'])->name('verify-otp-forgot-password');
Route::post('/verify-otp-forgot-password', [AuthController::class, 'verifyOtpForgotPassword'])->name('verify-otp-forgot-password.execute');

Route::get('/send-otp', [AuthController::class, 'showSendOTPForm'])->name('send-otp');
Route::post('/send-otp', [AuthController::class, 'sendOtpForRegister'])->name('send-otp.execute');

Route::get('/send-otp-forgot-password', [AuthController::class, 'showSendOTPForgotPassword'])->name('send-otp-forgot-password');
Route::post('/send-otp-forgot-password', [AuthController::class, 'sendOtpForgotPassword'])->name('send-otp-forgot-password.execute');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot-password');

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('change-password');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change-password.execute');

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('auth.google');;
Route::get('auth/google/callback', [GoogleSocialiteController::class, 'handleCallback']);


Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');

Route::get('/list-tour', [HomeController::class, 'listTour'])->name('list-tour');

Route::get('/detail-tour', [HomeController::class, 'detailTour'])->name('detail-tour');

Route::get('/booking-tour', [HomeController::class, 'bookingTour'])->name('booking-tour');

Route::get('/list-hotel', [HomeController::class, 'listHotel'])->name('list-hotel');

Route::get('/booking-hotel', [HomeController::class, 'bookingHotel'])->name('booking-hotel');

Route::get('/detail-hotel', [HomeController::class, 'detailHotel'])->name('detail-hotel');

Route::get('/confirm-booking', [HomeController::class, 'confirmBooking'])->name('confirm-booking');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin-dashboard', [AdminController::class, 'showAdminDashboard'])->name('admin-dashboard');

    Route::get('/admin-profile', [AdminController::class, 'adminProfile'])->name('admin-profile');

    //Tour
    Route::get('/tour-management', [TourController::class, 'tourManagement'])->name('tour-management');
    Route::get('/tour-management/create', [TourController::class, 'create'])->name('tour-management.create');
    Route::post('/tour-management', [TourController::class, 'createTour'])->name('tour-management.execute');
    Route::get('tour-management/{id}/edit', [TourController::class, 'edit'])->name('tour-management.edit');
    Route::post('tour-management/{id}/update', [TourController::class, 'updateTour'])->name('tour-management.update');
    Route::delete('/tour-management/{id}', [TourController::class, 'deleteTour'])->name('tour-management.delete');
    Route::post('/tour/{tourId}/update-gallery', [TourController::class, 'updateGallery'])->name('tour-management.update-gallery');
    Route::post('/tour/{tour}/delete-image/{image}', [TourController::class, 'deleteImage'])->name('tour-management.delete-image');

    Route::get('/tour-service', [TourController::class, 'tourService'])->name('tour-service');
    Route::post('/tour-service', [TourController::class, 'createOrUpdateService'])->name('tour-service.execute');
    Route::put('/tour-service/{id}', [TourController::class, 'createOrUpdateService']);
    Route::delete('/tour-service/{id}', [TourController::class, 'deleteService'])->name('tour-service.delete');

    Route::get('/tour-type', [TourController::class, 'tourType'])->name('tour-type');
    Route::post('/tour-type', [TourController::class, 'createOrUpdateType'])->name('tour-type.execute');
    Route::put('/tour-type/{id}', [TourController::class, 'createOrUpdateType']);
    Route::delete('/tour-type/{id}', [TourController::class, 'deleteType'])->name('tour-type.delete');

    Route::get('/tour-faq', [TourController::class, 'tourFaq'])->name('tour-faq');
    Route::post('/tour-faq', [TourController::class, 'createOrUpdateFAQ'])->name('tour-faq.execute');
    Route::put('/tour-faq/{id}', [TourController::class, 'createOrUpdateFAQ']);
    Route::delete('/tour-faq/{id}', [TourController::class, 'deleteFaq'])->name('tour-faq.delete');

    Route::get('/tour-itinerary', [TourController::class, 'tourItinerary'])->name('tour-itinerary');
    Route::post('/tour-itinerary', [TourController::class, 'createOrUpdateItinerary'])->name('tour-itinerary.execute');
    Route::put('/tour-itinerary/{id}', [TourController::class, 'createOrUpdateItinerary']);
    Route::delete('/tour-itinerary/{id}', [TourController::class, 'deleteItinerary'])->name('tour-itinerary.delete');

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
});
