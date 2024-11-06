<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['service' => 'Free WiFi'],
            ['service' => 'Air Conditioning'],
            ['service' => 'Television'],
            ['service' => 'Mini Bar'],
            ['service' => 'Room Service'],
            ['service' => 'Hot Water'],
            ['service' => 'Shower'],
            ['service' => 'Bathtub'],
            ['service' => 'Hairdryer'],
            ['service' => 'Safe Deposit Box'],
            ['service' => 'Telephone'],
            ['service' => 'Electric Kettle'],
            ['service' => 'Wake-up service'],
            ['service' => 'Wardrobe or closet'],
            ['service' => 'Towels'],
            ['service' => 'Toilet'],
            ['service' => 'Flat-sceen TV'],
            ['service' => 'Seafood 50kg'],
            ['service' => 'Seafood 55kg'],
            ['service' => 'Seafood 45kg'],
            ['service' => 'Private bathroom'],
            ['service' => 'Desk'],
            ['service' => 'Refrigeretor'],
            ['service' => 'Tile/Marble floor'],
            ['service' => 'Ironing facilities']
        ];

        DB::table('services_of_hotel')->insert($services);
    }
}
