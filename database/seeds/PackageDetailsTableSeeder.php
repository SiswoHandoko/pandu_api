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
        //Jakarta Top Attraction
            //1 day
            [
            	'package_id' => 1,
                'tourism_place_id' => 6,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
            	'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 1,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 2,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //2 days
            [
                'package_id' => 2,
                'tourism_place_id' => 6,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 2,
                'tourism_place_id' => 1,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 2,
                'tourism_place_id' => 2,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 2,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 2,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 2,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 2,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 2,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //3 days
            [
                'package_id' => 3,
                'tourism_place_id' => 6,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 1,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 2,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 28,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 33,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 3,
                'tourism_place_id' => 35,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //4 days
            [
                'package_id' => 4,
                'tourism_place_id' => 6,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 1,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 2,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 28,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 33,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 35,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 27,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 5,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 4,
                'tourism_place_id' => 29,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //5 days
            [
                'package_id' => 5,
                'tourism_place_id' => 6,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 1,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 2,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 28,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 33,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 35,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 27,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 5,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 29,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 5,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 5,
                'tourism_place_id' => 25,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 5,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //6 days
            [
                'package_id' => 6,
                'tourism_place_id' => 6,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 1,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 2,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 28,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 33,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 35,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 27,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 5,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 29,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 5,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 25,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 5,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 6,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 6,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
        //Jakarta Packed Itinerary
            //1 day
            [
            	'package_id' => 7,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
            	'status' => 'active'
            ],
            [
            	'package_id' => 7,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
            	'status' => 'active'
            ],
            [
            	'package_id' => 7,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
            	'status' => 'active'
            ],
            [
                'package_id' => 7,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 7,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //2 days
            [
                'package_id' => 8,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 8,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 8,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 8,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 8,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 8,
                'tourism_place_id' => 11,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 8,
                'tourism_place_id' => 29,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //3 days
            [
                'package_id' => 9,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 9,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 9,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 9,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 9,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 9,
                'tourism_place_id' => 11,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 9,
                'tourism_place_id' => 29,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 9,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 9,
                'tourism_place_id' => 25,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //4 days
            [
                'package_id' => 10,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 11,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 29,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 25,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 10,
                'tourism_place_id' => 21,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //5 days
            [
                'package_id' => 11,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 11,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 29,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 25,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 21,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 27,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 5,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 11,
                'tourism_place_id' => 13,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 5,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //6 days
            [
                'package_id' => 12,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 3,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 14,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 15,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 6,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 11,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 29,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 25,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 18,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 21,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 4,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 27,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 5,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 13,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 5,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 12,
                'tourism_place_id' => 43,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 6,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
        //Yogyakarta Top Attraction
            //1 day
            [
                'package_id' => 13,
                'tourism_place_id' => 76,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 13,
                'tourism_place_id' => 75,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 13,
                'tourism_place_id' => 80,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //2 days
            [
                'package_id' => 14,
                'tourism_place_id' => 76,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 14,
                'tourism_place_id' => 75,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 14,
                'tourism_place_id' => 80,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 14,
                'tourism_place_id' => 116,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 14,
                'tourism_place_id' => 90,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //3 days
            [
                'package_id' => 15,
                'tourism_place_id' => 76,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 15,
                'tourism_place_id' => 75,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 15,
                'tourism_place_id' => 80,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 15,
                'tourism_place_id' => 116,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 15,
                'tourism_place_id' => 90,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 15,
                'tourism_place_id' => 78,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 15,
                'tourism_place_id' => 118,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 15,
                'tourism_place_id' => 114,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
        //YogyakartaPacked Itinerary
            //1 day
            [
                'package_id' => 16,
                'tourism_place_id' => 78,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 16,
                'tourism_place_id' => 82,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //2 day
            [
                'package_id' => 17,
                'tourism_place_id' => 78,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 17,
                'tourism_place_id' => 82,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 17,
                'tourism_place_id' => 88,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 17,
                'tourism_place_id' => 97,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 17,
                'tourism_place_id' => 108,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 17,
                'tourism_place_id' => 109,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 17,
                'tourism_place_id' => 110,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 17,
                'tourism_place_id' => 112,
                'start_time' => '18:00',
                'end_time' => '20:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            //3 days
            [
                'package_id' => 18,
                'tourism_place_id' => 78,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 18,
                'tourism_place_id' => 82,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 18,
                'tourism_place_id' => 88,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 18,
                'tourism_place_id' => 97,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 18,
                'tourism_place_id' => 108,
                'start_time' => '12:00',
                'end_time' => '14:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 18,
                'tourism_place_id' => 109,
                'start_time' => '14:00',
                'end_time' => '16:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 18,
                'tourism_place_id' => 110,
                'start_time' => '16:00',
                'end_time' => '18:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 18,
                'tourism_place_id' => 112,
                'start_time' => '18:00',
                'end_time' => '20:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 18,
                'tourism_place_id' => 107,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
                'package_id' => 18,
                'tourism_place_id' => 98,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                // 'total_price' => 37000,
                'status' => 'active'
            ]
        ];

        PackageDetail::insert($data);
    }
}
