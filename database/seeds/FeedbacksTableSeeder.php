<?php

use App\Model\Feedback;
use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->truncate();

        $data = [
            [
            	'name' => 'Asep Mulyadi',
                'description' => 'This app is very good!',
                'status' => 'active'
            ],
            [
            	'name' => 'Siswo Handoko',
                'description' => 'Nicee!',
                'status' => 'active'
            ],
            [
            	'name' => 'Tommy Putra Pratama Gunawan',
                'description' => 'Keep up to date!',
                'status' => 'active'
            ],
            [
            	'name' => 'Faizal Muhammad',
                'description' => 'This app is very nice!',
                'status' => 'active'
            ],
            [
            	'name' => 'Wiwid Gunawan',
                'description' => 'This app is bad!',
                'status' => 'active'
            ],
        ];

        Feedback::insert($data);
    }
}
