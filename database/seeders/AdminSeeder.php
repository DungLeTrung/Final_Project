<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'administrator_kakazis@bumyaya.com',
            'password' => Hash::make('abcd1234'),
            'first_name' => 'Admin',
            'last_name' => 'King',
            'user_name' => 'Administrator1912',
            'phone' => '0842824902',
            'address' => '47 Phung Hung Street',
            'is_active' => true,
            'is_verify' => true,
            'role' => 'ADMIN',
            'created_at' => now(),
        ]);
    }
}
