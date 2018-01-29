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
             	'title' => 'Title Image',
             	'caption' => 'This a Caption Of Image',
             	'type' => 'main_slider',
             	'status' => 'active',
             ]
         ];

         Advertisement::insert($data);
     }
}
