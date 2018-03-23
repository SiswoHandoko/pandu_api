<?php

use App\Model\Package;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->truncate();

        $data = [
            [
                'name' => 'Jakarta Top Attraction 1 Day',
            	'description' => 'Jakarta Top Attraction 1 Day',
                'days' => 1,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
            	'status' => 'active'
            ],
            [
                'name' => 'Jakarta Top Attraction 2 Days',
                'description' => 'Jakarta Top Attraction 2 Days',
                'days' => 2,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Jakarta Top Attraction 3 Days',
                'description' => 'Jakarta Top Attraction 3 Days',
                'days' => 3,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Jakarta Top Attraction 4 Days',
                'description' => 'Jakarta Top Attraction 4 Days',
                'days' => 4,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Jakarta Top Attraction 5 Days',
                'description' => 'Jakarta Top Attraction 5 Days',
                'days' => 5,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Jakarta Top Attraction 6 Days',
                'description' => 'Jakarta Top Attraction 6 Days',
                'days' => 6,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Jakarta Packed Itinerary 1 Day',
            	'description' => 'Jakarta Packed Itinerary 1 Day',
                'days' => 1,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
            	'status' => 'active'
            ],
            [
                'name' => 'Jakarta Packed Itinerary 2 Day',
                'description' => 'Jakarta Packed Itinerary 2 Day',
                'days' => 2,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Jakarta Packed Itinerary 3 Day',
                'description' => 'Jakarta Packed Itinerary 3 Day',
                'days' => 3,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Jakarta Packed Itinerary 4 Day',
                'description' => 'Jakarta Packed Itinerary 4 Day',
                'days' => 4,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Jakarta Packed Itinerary 5 Day',
                'description' => 'Jakarta Packed Itinerary 5 Day',
                'days' => 5,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Jakarta Packed Itinerary 6 Day',
                'description' => 'Jakarta Packed Itinerary 6 Day',
                'days' => 6,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Yogyakarta Top Attraction 1 Day',
                'description' => 'Yogyakarta Top Attraction 1 Day',
                'days' => 1,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Yogyakarta Top Attraction 2 Day',
                'description' => 'Yogyakarta Top Attraction 2 Day',
                'days' => 2,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
            [
                'name' => 'Yogyakarta Top Attraction 3 Day',
                'description' => 'Yogyakarta Top Attraction 3 Day',
                'days' => 3,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
                'status' => 'active'
            ],
        ];

        Package::insert($data);
    }
}
