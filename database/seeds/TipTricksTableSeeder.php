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
            	'title' => '-',
            	'description' => '-',
                'status' => 'active'
            ]
        ];

        TipTrick::insert($data);
    }
}
