<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
            ['city' => 'Hà Nội', 'province' => 'Hà Nội', 'country' => 'Việt Nam'],
            ['city' => 'Hạ Long', 'province' => 'Quảng Ninh', 'country' => 'Việt Nam'],
            ['city' => 'Đà Nẵng', 'province' => 'Đà Nẵng', 'country' => 'Việt Nam'],
            ['city' => 'Hội An', 'province' => 'Quảng Nam', 'country' => 'Việt Nam'],
            ['city' => 'Huế', 'province' => 'Thừa Thiên Huế', 'country' => 'Việt Nam'],
            ['city' => 'Nha Trang', 'province' => 'Khánh Hòa', 'country' => 'Việt Nam'],
            ['city' => 'Đà Lạt', 'province' => 'Lâm Đồng', 'country' => 'Việt Nam'],
            ['city' => 'Sapa', 'province' => 'Lào Cai', 'country' => 'Việt Nam'],
            ['city' => 'Cần Thơ', 'province' => 'Cần Thơ', 'country' => 'Việt Nam'],
            ['city' => 'Phú Quốc', 'province' => 'Kiên Giang', 'country' => 'Việt Nam'],
            ['city' => 'Hải Phòng', 'province' => 'Hải Phòng', 'country' => 'Việt Nam'],
            ['city' => 'Vũng Tàu', 'province' => 'Bà Rịa - Vũng Tàu', 'country' => 'Việt Nam'],
            ['city' => 'Mộc Châu', 'province' => 'Sơn La', 'country' => 'Việt Nam'],
            ['city' => 'Tam Đảo', 'province' => 'Vĩnh Phúc', 'country' => 'Việt Nam'],
            ['city' => 'Phan Thiết', 'province' => 'Bình Thuận', 'country' => 'Việt Nam'],
            ['city' => 'Côn Đảo', 'province' => 'Bà Rịa - Vũng Tàu', 'country' => 'Việt Nam'],
            ['city' => 'Pleiku', 'province' => 'Gia Lai', 'country' => 'Việt Nam'],
            ['city' => 'Buôn Ma Thuột', 'province' => 'Đắk Lắk', 'country' => 'Việt Nam'],
            ['city' => 'Quy Nhơn', 'province' => 'Bình Định', 'country' => 'Việt Nam'],
            ['city' => 'Cát Bà', 'province' => 'Hải Phòng', 'country' => 'Việt Nam'],
        ];

        DB::table('destination')->insert($destinations);
    }
}
