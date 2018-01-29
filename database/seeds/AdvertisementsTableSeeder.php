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
             	'image_url' => 'advertisement_1.jpg',
             	'title' => 'Title Image',
             	'caption' => 'This a Caption Of Image',
             	'type' => '',
             	'status' => 'active',
             ]
         ];

         Advertisement::insert($data);
     }
}
