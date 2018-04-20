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
                'code' => 'PND0001',
                'name' => 'Plan A',
                'background' => 'http://api.dipanduapp.com/public/images/plans/background/default_plan_background.png',
            	'user_id' => 3,
                'guide_id' => 2,
                'total_adult' => 2,
                'total_child' => 1,
                'total_infant' => 1,
            	'total_tourist' => 0,
                'days' => 3,
            	'start_date' => '2018-01-10',
                'end_date' => '2018-01-11',
                'total_price' => 74000,
            	'receipt' => '',
                'type' => 'many',
            	'status' => 'hold'
            ],
            [   
                'code' => 'PND0002',
                'name' => 'Plan B',
                'background' => 'http://api.dipanduapp.com/public/images/plans/background/default_plan_background.png',
                'user_id' => 3,
                'guide_id' => 2,
                'total_adult' => 2,
                'total_child' => 1,
                'total_infant' => 1,
                'total_tourist' => 0,
                'days' => 1,
                'start_date' => '2018-01-10',
                'end_date' => '2018-01-10',
                'total_price' => 37000,
                'receipt' => '',
                'type' => 'single',
                'status' => 'hold'
            ],
            [   
                'code' => 'PND0003',
                'name' => 'Plan C',
                'background' => 'http://api.dipanduapp.com/public/images/plans/background/default_plan_background.png',
                'user_id' => 3,
                'guide_id' => 2,
                'total_adult' => 2,
                'total_child' => 1,
                'total_infant' => 1,
                'total_tourist' => 0,
                'days' => 1,
                'start_date' => '2018-01-10',
                'end_date' => '2018-01-10',
                'total_price' => 37000,
                'receipt' => '',
                'type' => 'single',
                'status' => 'hold'
            ],
            [   
                'code' => 'PND0004',
                'name' => 'Plan D',
                'background' => 'http://api.dipanduapp.com/public/images/plans/background/default_plan_background.png',
                'user_id' => 4,
                'guide_id' => 2,
                'total_adult' => 2,
                'total_child' => 1,
                'total_infant' => 1,
                'total_tourist' => 0,
                'days' => 1,
                'start_date' => '2018-01-10',
                'end_date' => '2018-01-10',
                'total_price' => 37000,
                'receipt' => '',
                'type' => 'single',
                'status' => 'hold'
            ],
            [   
                'code' => 'PND0005',
                'name' => 'Plan E',
                'background' => 'http://api.dipanduapp.com/public/images/plans/background/default_plan_background.png',
                'user_id' => 5,
                'guide_id' => 2,
                'total_adult' => 2,
                'total_child' => 1,
                'total_infant' => 1,
                'total_tourist' => 0,
                'days' => 1,
                'start_date' => '2018-01-10',
                'end_date' => '2018-01-10',
                'total_price' => 37000,
                'receipt' => '',
                'type' => 'single',
                'status' => 'hold'
            ]
        ];

        Plan::insert($data);
    }
}
