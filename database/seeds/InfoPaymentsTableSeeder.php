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
            	'name' => 'Asep Mulyadi',
                'status' => 'active'
            ]
        ];

        InfoPayment::insert($data);
    }
}
