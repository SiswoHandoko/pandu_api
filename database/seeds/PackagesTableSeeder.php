<?php

use App\Model\Package;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->truncate();
    	
        $data = [
            [
                'name' => 'Paket A',
            	'description' => 'Paket A',
                'days' => 2,
                'start_date' => '2018-01-10',
                'end_date' => '2018-01-11',
                // 'total_price' => 74000,
            	'status' => 'active'
            ],
            [
                'name' => 'Paket B',
            	'description' => 'Paket B',
                'days' => 1,
                'start_date' => '2018-01-10',
                'end_date' => '2018-01-10',
                // 'total_price' => 37000,
            	'status' => 'active'
            ]
        ];
        
        Package::insert($data);
    }
}
