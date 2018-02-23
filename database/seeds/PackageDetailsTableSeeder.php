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
            [
            	'package_id' => 1,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
            	'status' => 'active'
            ],
            [
                'package_id' => 1,
                'tourism_place_id' => 2,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 2,
                // 'total_price' => 37000,
                'status' => 'active'
            ],
            [
            	'package_id' => 2,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                // 'total_price' => 37000,
            	'status' => 'active'
            ]
        ];
        
        PackageDetail::insert($data);
    }
}
