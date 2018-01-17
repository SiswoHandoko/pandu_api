<?php

use App\Model\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->truncate();
    	
        $data = array(
            [
            	'province_id' => 1,
            	'name' => 'Ciamis',
                'image_url' => 'ciamis.jpg',
            	'status' => 'active'
            ],
            [
            	'province_id' => 1,
            	'name' => 'Bandung',
            	'image_url' => 'bandung.jpg',
                'status' => 'active'
            ],
            [
            	'province_id' => 1,
            	'name' => 'Tasikmalaya',
            	'image_url' => 'tasikmalaya.jpg',
                'status' => 'active'
            ]
        );
        
        foreach ($data as $value) {
            City::create($value);
        }
    }
}
