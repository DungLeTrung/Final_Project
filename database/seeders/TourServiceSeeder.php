<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['service' => 'Port pickup and drop-off'],
            ['service' => 'Local guide'],
            ['service' => 'Round-trip shared transfer'],
            ['service' => 'Transport by minibus'],
            ['service' => 'Gold ticket'],
            ['service' => 'Shared boat ride tour around these destinations'],
            ['service' => 'Private guide'],
            ['service' => 'Hotel pickup and drop-off'],
            ['service' => 'Group photo opportunity'],
            ['service' => 'Complimentary refreshments'],
            ['service' => 'Entrance fees to attractions'],
            ['service' => 'VIP seating'],
            ['service' => 'Museum tour'],
            ['service' => 'Snorkeling gear'],
            ['service' => 'Lunch included'],
            ['service' => 'Sightseeing tour'],
            ['service' => 'Beverages and snacks'],
            ['service' => 'Insurance coverage'],
            ['service' => 'Air-conditioned transport'],
            ['service' => 'Digital photos of the tour'],
            ['service' => 'Priority boarding'],
            ['service' => 'Boat rental'],
            ['service' => 'Interactive cultural experience'],
            ['service' => 'Sustainable travel options'],
            ['service' => 'Barbecue dinner'],
            ['service' => 'Exclusive VIP lounge access'],
            ['service' => 'Luggage assistance'],
            ['service' => 'Personalized souvenirs'],
            ['service' => 'Free Wi-Fi onboard'],
            ['service' => 'Bicycle rental'],
            ['service' => 'Sunset cruise'],
        ];

        DB::table('services_of_tour')->insert($services);
    }
}
