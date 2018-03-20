<?php

use App\Model\TourismPlace;
use Illuminate\Database\Seeder;

class TourismPlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tourism_places')->truncate();

        $data = [
            [
                'city_id' => 227,
            	'category' => '',
            	'name' => 'Borobudur',
            	'description' => 'This is borobudur',
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
            	'tourist_price' => 15000,
            	'longitude' => 1,
            	'latitude' => -1,
                'facilities' => 'toilet, mushola, wifi',
            	'rate' => 1,
            	'status' => 'active'
            ],
            [
                'city_id' => 227,
                'category' => '',
                'name' => 'Prambanan',
                'description' => 'This is prambanan',
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 15000,
                'longitude' => 2,
                'latitude' => -2,
                'facilities' => 'toilet, mushola, wifi',
                'rate' => 2,
                'status' => 'active'
            ],
            [
                'city_id' => 227,
                'category' => '',
                'name' => 'Laut Selatan',
                'description' => 'This is Laut Selatan',
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 15000,
                'longitude' => 4,
                'latitude' => -4,
                'facilities' => 'toilet, mushola, wifi',
                'rate' => 3,
                'status' => 'active'
            ],
            [
                'city_id' => 515,
                'category' => '',
                'name' => 'Ancol',
                'description' => 'This is Ancol',
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 15000,
                'longitude' => 2,
                'latitude' => -2,
                'facilities' => 'toilet, mushola, wifi',
                'rate' => 1,
                'status' => 'active'
            ],
            [
                'city_id' => 515,
                'category' => '',
                'name' => 'TMII',
                'description' => 'This is TMII',
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 15000,
                'longitude' => 3,
                'latitude' => -3,
                'facilities' => 'toilet, mushola, wifi',
                'rate' => 2,
                'status' => 'active'
            ]
        ];

        TourismPlace::insert($data);
    }
}
