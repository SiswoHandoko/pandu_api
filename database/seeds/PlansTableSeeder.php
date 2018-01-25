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
            	'user_id' => 3,
            	'tourism_place_id' => 1,
            	'guide_id' => 2,
            	'start_date' => '2018-01-10 08:00:00',
            	'end_date' => '2018-01-15 08:00:00',
            	'status' => 'hold'
            ]
        ];

        Plan::insert($data);
    }
}
