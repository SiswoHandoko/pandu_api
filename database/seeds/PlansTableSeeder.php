<?php

use App\Model\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->truncate();

        $data = [
            [
            	'user_id' => 1,
                'guide_id' => 2,
                'total_adult' => 2,
                'total_child' => 1,
                'total_infant' => 1,
            	'total_tourist' => 0,
            	'start_date' => '2018-01-10',
                'end_date' => '2018-01-15',
                'total_price' => 74000,
            	'receipt' => '',
            	'status' => 'hold'
            ]
        ];

        Plan::insert($data);
    }
}
