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
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-001',
            	'status' => 'active'
            ],
            [
                'plan_id' => 1,
                'tourism_place_id' => 2,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 1,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-002',
                'status' => 'active'
            ],
            [
                'plan_id' => 1,
                'tourism_place_id' => 3,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-003',
                'status' => 'active'
            ],
            [
                'plan_id' => 1,
                'tourism_place_id' => 4,
                'start_time' => '09:00',
                'end_time' => '12:00',
                'day' => 2,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-004',
                'status' => 'active'
            ],
            [
                'plan_id' => 1,
                'tourism_place_id' => 5,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 2,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-005',
                'status' => 'active'
            ],
            [
                'plan_id' => 1,
                'tourism_place_id' => 6,
                'start_time' => '10:00',
                'end_time' => '12:00',
                'day' => 3,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-006',
                'status' => 'active'
            ],
            [
                'plan_id' => 1,
                'tourism_place_id' => 7,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 3,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-007',
                'status' => 'active'
            ],
            [
                'plan_id' => 2,
                'tourism_place_id' => 1,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-002',
                'status' => 'active'
            ],
            [
                'plan_id' => 3,
                'tourism_place_id' => 1,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-002',
                'status' => 'active'
            ],
            [
                'plan_id' => 4,
                'tourism_place_id' => 4,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-002',
                'status' => 'active'
            ],
            [
                'plan_id' => 5,
                'tourism_place_id' => 5,
                'start_time' => '13:00',
                'end_time' => '15:00',
                'day' => 1,
                'adult_price' => 10000,
                'child_price' => 9000,
                'infant_price' => 8000,
                'tourist_price' => 0,
                'no_ticket' => 'T-002',
                'status' => 'active'
            ],
        ];

        PlanDetail::insert($data);
    }
}
