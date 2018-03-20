<?php

use App\Model\Picture;
use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->truncate();

        $data = [
            [
            	'tourism_place_id' => 1,
            	'image_url' => '1.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 2,
            	'image_url' => '2.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 3,
            	'image_url' => '3.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 4,
            	'image_url' => '4.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 5,
            	'image_url' => '5.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 6,
            	'image_url' => '6.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 7,
            	'image_url' => '7.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 8,
            	'image_url' => '8.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>9,
            	'image_url' => '9.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>10,
            	'image_url' => '10.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>11,
            	'image_url' => '11.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 12,
            	'image_url' => '12.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 13,
            	'image_url' => '13.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 14,
            	'image_url' => '14.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 15,
            	'image_url' => '15.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 16,
            	'image_url' => '16.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 17,
            	'image_url' => '17.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>18,
            	'image_url' => '18.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 19,
            	'image_url' => '19.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 20,
            	'image_url' => '20.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 21,
            	'image_url' => '21.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 22,
            	'image_url' => '22.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 23,
            	'image_url' => '23.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 24,
            	'image_url' => '24.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 25,
            	'image_url' => '25.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 26,
            	'image_url' => '26.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 27,
            	'image_url' => '27.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>28,
            	'image_url' => '28.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 29,
            	'image_url' => '29.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 30,
            	'image_url' => '30.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>31,
            	'image_url' => '31.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 32,
            	'image_url' => '32.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 33,
            	'image_url' => '33.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 34,
            	'image_url' => '34.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 35,
            	'image_url' => '35.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 36,
            	'image_url' => '36.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 37,
            	'image_url' => '37.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 38,
            	'image_url' => '38.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 39,
            	'image_url' => '40.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 40,
            	'image_url' => '40.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 41,
            	'image_url' => '41.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 42,
            	'image_url' => '42.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 43,
            	'image_url' => '43.png',
            	'status' => 'active'
            ]
        ];

        Picture::insert($data);
    }
}
