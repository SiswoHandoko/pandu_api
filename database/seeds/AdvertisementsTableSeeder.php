<?php

use App\Model\Advertisement;
use Illuminate\Database\Seeder;

class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

         DB::table('advertisements')->truncate();

         $data = [
             [
             	'image_url' => 'default_advertisement.png',
             	'title' => 'Title Image 1',
             	'caption' => 'This a Caption Of Image 1',
             	'type' => 'main_slider',
             	'status' => 'active',
            ],
            [
                'image_url' => 'default_advertisement.png',
                'title' => 'Title Image 2',
                'caption' => 'This a Caption Of Image 2',
                'type' => 'main_slider',
                'status' => 'active',
            ],
            [
                'image_url' => 'default_advertisement.png',
                'title' => 'Title Image 3',
                'caption' => 'This a Caption Of Image 3',
                'type' => 'main_slider',
                'status' => 'active',
            ],
            [
                'image_url' => 'default_advertisement.png',
                'title' => 'Title Image 4',
                'caption' => 'This a Caption Of Image 4',
                'type' => 'main_slider',
                'status' => 'active',
            ],
            [
                'image_url' => 'default_advertisement.png',
                'title' => 'Title Image 5',
                'caption' => 'This a Caption Of Image 5',
                'type' => 'main_slider',
                'status' => 'active',
            ]
         ];

         Advertisement::insert($data);
     }
}
