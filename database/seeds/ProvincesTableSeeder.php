<?php

use App\Model\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->truncate();
    	
        $data = array(
            [
                'name' => 'Jawa Barat',
            	'status' => 'active'
            ],
            [
            	'name' => 'Jawa Tengah',
                'status' => 'active'
            ],
            [
            	'name' => 'Jawa Timur',
                'status' => 'active'
            ]
        );
        
        foreach ($data as $value) {
            Province::create($value);
        }
    }
}
