<?php

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
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');

Route::get('/', [HomeController::class, 'homePage'])->name('home-page');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.execute');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgotPassword');

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('changePassword');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

