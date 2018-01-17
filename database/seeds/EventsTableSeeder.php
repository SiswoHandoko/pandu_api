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
            	'tp_id' => 1,
            	'name' => 'Festival',
                'description' => 'This is event festival',
            	'start_date' => '2018-01-10 08:00:00',
            	'end_date' => '2018-01-15 08:00:00'
            ]
        ];
        
        Event::insert($data);
    }
}
