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
            	'package_id' => 0,
                'rate' => 2,
                'status' => 'active'
            ],
            [
            	'tourism_place_id' => 0,
            	'package_id' => 1,
                'rate' => 3,
                'status' => 'active'
            ]
        ];

        SpecialDeal::insert($data);
    }
}
