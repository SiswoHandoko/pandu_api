<?php

use App\Model\Event;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        $data = [
            [
            	'tourism_place_id' => 1,
            	'name' => 'Festival 1',
                'description' => 'This is event festival 1',
            	'start_date' => '2018-01-10 08:00:00',
                'end_date' => '2018-01-15 08:00:00',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 2,
            	'name' => 'Festival 2',
                'description' => 'This is event festival 2',
            	'start_date' => '2018-01-10 08:00:00',
            	'end_date' => '2018-01-15 08:00:00',
                'status' => 'active'
            ],
            [
            	'tourism_place_id' => 3,
            	'name' => 'Festival 3',
                'description' => 'This is event festival 3',
            	'start_date' => '2018-01-10 08:00:00',
            	'end_date' => '2018-01-15 08:00:00',
                'status' => 'active'
            ],
            [
            	'tourism_place_id' => 4,
            	'name' => 'Festival 4',
                'description' => 'This is event festival 4',
            	'start_date' => '2018-01-10 08:00:00',
            	'end_date' => '2018-01-15 08:00:00',
                'status' => 'active'
            ],
            [
            	'tourism_place_id' => 5,
            	'name' => 'Festival 5',
                'description' => 'This is event festival 5',
            	'start_date' => '2018-01-10 08:00:00',
            	'end_date' => '2018-01-15 08:00:00',
                'status' => 'active'
            ]
        ];

        Event::insert($data);
    }
}
