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
            	'image_url' => 'default_place.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 1,
            	'image_url' => 'default_place.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 1,
            	'image_url' => 'default_place.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 2,
            	'image_url' => 'default_place.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 3,
            	'image_url' => 'default_place.png',
            	'status' => 'active'
            ]
        ];

        Picture::insert($data);
    }
}
