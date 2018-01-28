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
            	'status' => 'active'
            ],
            [
                'name' => 'Paket B',
            	'description' => 'Paket B',
            	'status' => 'active'
            ]
        ];
        
        Package::insert($data);
    }
}
