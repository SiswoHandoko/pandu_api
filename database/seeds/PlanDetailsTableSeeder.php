<?php

use App\Model\PlanDetail;
use Illuminate\Database\Seeder;

class PlanDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plan_details')->truncate();

        $data = [
            [
            	'plan_id' => 1,
                'tourism_place_id' => 1,
                'start_time' => '08:00',
                'end_time' => '10:00',
                'day' => 1,
                'total_price_adult' => 20000,
                'total_price_child' => 9000,
                'total_price_infant' => 8000,
                'total_price_tourist' => 0,
                'no_ticket' => 'T-001',
            	'status' => 'active'
            ],
            [
                'plan_id' => 1,
                'tourism_place_id' => 2,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 2,
                'total_price_adult' => 20000,
                'total_price_child' => 9000,
                'total_price_infant' => 8000,
                'total_price_tourist' => 0,
                'no_ticket' => 'T-002',
                'status' => 'active'
            ],
            [
                'plan_id' => 2,
                'tourism_place_id' => 2,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                'total_price_adult' => 20000,
                'total_price_child' => 9000,
                'total_price_infant' => 8000,
                'total_price_tourist' => 0,
                'no_ticket' => 'T-002',
                'status' => 'active'
            ]
        ];

        PlanDetail::insert($data);
    }
}
