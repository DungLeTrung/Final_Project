<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(array $credentials): array
    {
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'ADMIN') {
                return [
                    'success' => true,
                    'role' => 'ADMIN',
                    'redirect' => route('admin-dashboard'),
                ];
            } else if ($user->role === 'USER') {
                return [
                    'success' => true,
                    'role' => 'USER',
                    'redirect' => route('/'),
                ];
            }

            return [
                'success' => true,
                'role' => 'USER',
            ];
        }

        return [
            'success' => false,
            'message' => 'Invalid credentials',
        ];
    }
}
