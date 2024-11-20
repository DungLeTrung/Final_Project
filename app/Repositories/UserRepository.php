<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAllUsers()
    {
        return $this->user->where('role', '!=', 'ADMIN')->paginate(10);
    }

    public function create(array $data)
    {
        return $this->user->create($data);
    }

    public function findByEmail($email)
    {
        return $this->user->where('email', $email)->first();
    }

    public function findById($id)
    {
        return $this->user->where('id', $id)->first();
    }

    public function updateStatus($user, $status)
    {
        $user->is_active = ($status === 'Active') ? true : false;
        return $user->save();
    }

    public function updatePassword($user, $password)
    {
        $user->password = Hash::make($password);
        $user->save();
    }

    public function verifyUser($email)
    {
        return $this->user->where('email', $email)->first();
    }

    public function update(User $user, array $data)
    {
        return $user->update($data);
    }

    public function delete(User $user)
    {
        return $user->delete();
    }
}
