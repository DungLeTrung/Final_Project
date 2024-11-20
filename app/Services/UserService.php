<?php

namespace App\Services;

use App\Repositories\TourTypeRepository;
use App\Repositories\UserRepository;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function listUser()
    {
        return $this->userRepository->getAllUsers();
    }

    public function toggleBan($userId, $status)
    {
        $user = $this->userRepository->findById($userId);

        if ($user) {
            return $this->userRepository->updateStatus($user, $status);
        }

        return null;
    }
}
