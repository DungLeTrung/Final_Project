<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;


    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function userProfile()
    {
        return view('user.user_profile');
    }

    public function accountManagement()
    {
        $users = $this->userService->listUser();
        return view('admin.user.admin_account', compact('users'));
    }

    public function toggleBan(Request $request)
    {
        $userId = $request->user_id;
        $status = $request->status;

        $updated = $this->userService->toggleBan($userId, $status);

        if ($updated) {
            return response()->json(['message' => 'User status updated successfully!']);
        }

        return response()->json(['message' => 'User not found'], 404);
    }
}
