<?php

use App\Model\PackageCity;
use Illuminate\Database\Seeder;

class PackageCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('package_cities')->truncate();
        
        $data = [
            [
            	'package_id' => 1,
            	'city_id' => 1,
            	'status' => 'active'
            ],
            [
                'package_id' => 1,
                'city_id' => 2,
                'status' => 'active'
            ]
        ];

        PackageCity::insert($data);
    }
}
