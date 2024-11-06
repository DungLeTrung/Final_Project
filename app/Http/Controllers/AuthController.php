<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
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
}
