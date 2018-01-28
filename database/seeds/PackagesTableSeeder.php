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
            	'tourism_place_id' => 1,
            	'name' => 'Paket A',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 2,
            	'name' => 'Paket A',
            	'status' => 'active'
            ]
        ];
        
        Package::insert($data);
    }
}
