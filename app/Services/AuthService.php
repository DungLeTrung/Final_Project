<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\AuthRepository;
use Illuminate\Support\Facades\Auth;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthService
{
    protected $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register($data)
    {
        $validatedData = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_name' => $data['user_name'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'USER',
            'is_verify' => false,
            'is_active' => true,
        ];

        return $this->authRepository->createUser($validatedData);
    }

    public function sendOtp($email)
    {
        $user = $this->authRepository->findUserByEmail($email);

        if (!$user) {
            return ['message' => 'Email is not registered', 'status' => 404];
        }

        $otpCode = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        $expirationTime = now()->addMinutes(10);
        $hashedOtpCode = Hash::make($otpCode);

        $otp = $this->authRepository->getLatestOtpByEmail($email);

        if ($otp && now()->diffInMinutes($otp->created_at) < 10) {
            return ['message' => 'OTP is still valid', 'status' => 404];
        }

        if ($otp) {
            $this->authRepository->updateOtp($otp, [
                'otp_code' => $hashedOtpCode,
                'expired' => $expirationTime,
                'updated_at' => now(),
            ]);
        } else {
            $this->authRepository->createOtp([
                'otp_code' => $hashedOtpCode,
                'expired' => $expirationTime,
                'email' => $email,
            ]);
        }

        Mail::to($email)->send(new OtpMail($email, $otpCode, $expirationTime));

        return ['message' => 'OTP sent successfully', 'status' => 200];
    }

    public function verifyOtp($email, $otpCode)
    {
        $otp = $this->authRepository->getLatestOtpByEmail($email);

        if (!$otp) {
            return ['message' => 'No OTP found for this email', 'status' => 400];
        }

        if ($otp->expired < now()) {
            return ['message' => 'OTP has expired', 'status' => 400];
        }

        if (Hash::check($otpCode, $otp->otp_code)) {
            $user = $this->authRepository->findUserByEmail($email);
            $user->is_verify = true;
            $user->save();

            return ['message' => 'OTP verified successfully', 'status' => 200];
        }

        return ['message' => 'Invalid OTP', 'status' => 400];
    }

    public function updatePassword($email, $newPassword)
    {
        $user = $this->authRepository->findUserByEmail($email);
        if (!$user) {
            return ['message' => 'User not found', 'status' => 404];
        }

        $hashedPassword = Hash::make($newPassword);
        $this->authRepository->updatePassword($user, $hashedPassword);

        return ['message' => 'Updated Password Successfully!', 'status' => 200];
    }
}
