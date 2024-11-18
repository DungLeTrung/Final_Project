<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot_password');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showChangePasswordForm()
    {
        return view('auth.change_password');
    }

    public function showOtpVerificationForm()
    {
        $email = request()->query('email');

        return view('auth.verify_otp_register', compact('email'));
    }

    public function showSendOTPForm()
    {
        return view('auth.send_otp_register');
    }

    public function showSendOTPForgotPassword()
    {
        return view('auth.send_otp_forgot_password');
    }

    public function showOtpVerificationForgotPasswordForm()
    {
        $email = request()->query('email');
        return view('auth.verify_otp_forgot_password', compact('email'));
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->role === 'ADMIN') {
                return response()->json([
                    'message' => 'Login successful. Redirecting to admin dashboard.',
                    'redirect' => route('admin-dashboard'),
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Login successful. Redirecting to homepage.',
                    'redirect' => route('home-page'),
                ], 200);
            }
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }


    public function register(RegisterRequest $request)
    {
        try {
            $user = $this->authService->register($request->all());
            if ($user) {
                $this->authService->sendOtp($request->email);

                return response()->json(
                    [
                        'message' => 'User registered successfully. Please verify your email.',
                        'redirect' => route('verify-otp-register', ['email' => $request->email]),
                    ],
                    201,
                );
            }
        } catch (ValidationException $e) {
            return response()->json([
                'errors' => $e->validator->getMessageBag(),
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong. Please try again later.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function sendOtpForRegister(Request $request)
    {
        try {
            DB::beginTransaction();

            $response = $this->authService->sendOtp($request->email);

            if ($response['status'] === 404) {
                DB::rollBack();
                return response()->json([
                    'message' => $response['message'],
                ], 404);
            }

            DB::commit();

            return response()->json([
                'message' => $response['message'],
                'redirect' => route('verify-otp-register', ['email' => $request->email]),
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error sending OTP.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function sendOtpForgotPassword(Request $request)
    {
        try {
            DB::beginTransaction();

            $response = $this->authService->sendOtp($request->email);

            if ($response['status'] === 404) {
                DB::rollBack();
                return response()->json([
                    'message' => $response['message'],
                ], 404);
            }

            DB::commit();

            return response()->json([
                'message' => $response['message'],
                'redirect' => route('verify-otp-forgot-password', ['email' => $request->email]),
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error sending OTP.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function verifyOtpRegister(Request $request)
    {
        try {
            DB::beginTransaction();
            $response = $this->authService->verifyOtp($request->email, $request->otp_code);
            DB::commit();
            return response()->json(
                [
                    'message' => $response['message'],
                    'redirect' => route('login'),
                ],
                200,
            );
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error verify OTP.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function verifyOtpForgotPassword(Request $request)
    {
        try {
            DB::beginTransaction();
            $response = $this->authService->verifyOtp($request->email, $request->otp_code);
            if ($response['status'] === 400) {
                DB::rollBack();
                return response()->json([
                    'message' => $response['message'],
                ], 404);
            }

            DB::commit();

            return response()->json([
                'message' => $response['message'],
                'redirect' => route('change-password', ['email' => $request->email]),
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error verify OTP.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have logged out successfully!');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->authService->updatePassword($request->email, $request->new_password);
            DB::commit();

            return response()->json(
                [
                    'message' => 'Password changed successfully!!!',
                    'redirect' => route('login'),
                ],
                200,
            );
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating password: ' . $e->getMessage());
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
