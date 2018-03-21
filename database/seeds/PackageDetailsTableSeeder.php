<?php

use App\Model\PackageDetail;
use Illuminate\Database\Seeder;

class PackageDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_details')->truncate();

        $data = [
            [
            	'package_id' => 1,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
            	'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 2,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 3,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 4,
                'start_time' => '09:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 5,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 6,
                'start_time' => '09:00',
                'end_time' => '10:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 7,
                'start_time' => '11:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 18,
                'start_time' => '13:00',
                'end_time' => '14:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 2,
                'tourism_place_id' => 2,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
            	'package_id' => 3,
                'tourism_place_id' => 3,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
            	'status' => 'active'
            ],
            [
            	'package_id' => 3,
                'tourism_place_id' => 3,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
            	'status' => 'active'
            ],
            [
            	'package_id' => 3,
                'tourism_place_id' => 3,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 3,
                // 'total_price' => 37000,
            	'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 4,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 5,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
        ];

        PackageDetail::insert($data);
    }
}
