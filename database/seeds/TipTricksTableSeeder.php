<?php

use App\Model\TipTrick;
use Illuminate\Database\Seeder;

class TipTricksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tip_tricks')->truncate();

        $data = [
            [
            	'title' => 'Tips And Trick 1',
            	'description' => 'Description 1',
                'status' => 'active'
            ],
            [
            	'title' => 'Tips And Trick 2',
            	'description' => 'Description 2',
                'status' => 'active'
            ],
            [
            	'title' => 'Tips And Trick 3',
            	'description' => 'Description 3',
                'status' => 'active'
            ],
            [
            	'title' => 'Tips And Trick 4',
            	'description' => 'Description 4',
                'status' => 'active'
            ],
            [
            	'title' => 'Tips And Trick 5',
            	'description' => 'Description 5',
                'status' => 'active'
            ]
        ];

        TipTrick::insert($data);
    }
}
