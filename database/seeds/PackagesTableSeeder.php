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
            	'description' => 'This is Paket A',
                'days' => 3,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-11',
                // 'total_price' => 74000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
            	'status' => 'active'
            ],
            [
                'name' => 'Paket B',
            	'description' => 'This is Paket B',
                'days' => 1,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
            	'status' => 'active'
            ],
            [
                'name' => 'Paket C',
            	'description' => 'This is Paket C',
                'days' => 3,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
            	'status' => 'active'
            ],
            [
                'name' => 'Paket D',
            	'description' => 'This is Paket D',
                'days' => 1,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
            	'status' => 'active'
            ],
            [
                'name' => 'Paket E',
            	'description' => 'This is Paket E',
                'days' => 1,
                // 'start_date' => '2018-01-10',
                // 'end_date' => '2018-01-10',
                // 'total_price' => 37000,
                'image_url' => 'http://api.dipanduapp.com/public/images/packages/default_package.png',
            	'status' => 'active'
            ]
        ];

        Package::insert($data);
    }
}
