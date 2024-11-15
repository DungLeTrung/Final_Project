<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $result = $this->authService->login($request->only('email', 'password'));

        if ($result['success']) {
            if (isset($result['redirect'])) {
                return response()->json([
                    'message' => 'Login successful',
                    'redirect' => $result['redirect'],
                ], 200);
            }

            return response()->json(['message' => 'Login successful'], 200);
        }

        return response()->json(['message' => $result['message']], 401);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have logged out successfully!');
    }
}
