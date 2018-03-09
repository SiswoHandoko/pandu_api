<?php

use App\Model\SpecialDeal;
use Illuminate\Database\Seeder;

class SpecialDealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('special_deals')->truncate();

        $data = [
            [
            	'tourism_place_id' => 1,
            	'package_id' => 1,
                'rate' => 2,
                'status' => 'active'
            ],
            [
            	'tourism_place_id' => 2,
            	'package_id' => 2,
                'rate' => 3,
                'status' => 'active'
            ],
            [
            	'tourism_place_id' => 3,
            	'package_id' => 3,
                'rate' => 3,
                'status' => 'active'
            ],
            [
            	'tourism_place_id' => 4,
            	'package_id' => 4,
                'rate' => 3,
                'status' => 'active'
            ],
            [
            	'tourism_place_id' => 5,
            	'package_id' => 5,
                'rate' => 3,
                'status' => 'active'
            ]
        ];

        SpecialDeal::insert($data);
    }
}
