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

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');

Route::get('/list-tour', [HomeController::class, 'listTour'])->name('list-tour');

Route::get('/detail-tour', [HomeController::class, 'detailTour'])->name('detail-tour');

Route::get('/list-hotel', [HomeController::class, 'listHotel'])->name('list-hotel');

Route::get('/detail-hotel', [HomeController::class, 'detailHotel'])->name('detail-hotel');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.execute');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgotPassword');

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('changePassword');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

Route::get('/admin-dashboard', [AdminController::class, 'showAdminDashboard'])->name('adminDashboard');

