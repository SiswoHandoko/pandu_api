<?php

use App\Model\InfoPayment;
use Illuminate\Database\Seeder;

class InfoPaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info_payments')->truncate();

        $data = [
            [
            	'bank' => 'BRI',
            	'no_rek' => '0123456789',
            	'name' => 'Admin Bank 1',
                'status' => 'active'
            ],
            [
            	'bank' => 'BNI',
            	'no_rek' => '987654321',
            	'name' => 'Admin Bank 2',
                'status' => 'active'
            ],
            [
            	'bank' => 'BCA',
            	'no_rek' => '765234123',
            	'name' => 'Admin Bank 3',
                'status' => 'active'
            ],
            [
            	'bank' => 'MANDIRI',
            	'no_rek' => '3456218374',
            	'name' => 'Admin Bank 4',
                'status' => 'active'
            ],
            [
            	'bank' => 'SINARMAS',
            	'no_rek' => '7618273784',
            	'name' => 'Admin Bank 5',
                'status' => 'active'
            ]
        ];

        InfoPayment::insert($data);
    }
}
