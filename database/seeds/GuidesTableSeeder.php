<?php

use App\Model\Guide;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GuidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guides')->truncate();

        $data = [
            [
            	'firstname' => 'Siswo',
            	'lastname' => 'Handoko',
            	'contact' => '089687476161',
            	'address' => 'Surabaya, Jawa Timur',
            	'birthdate' => '1992-05-12',
            	'nik' => '3207032408930002',
            	'username' => 'siswohandoko',
            	'password' => Hash::make('qwerty'),
            	'email' => 'guide@gmail.com',
                'web_token' => sha1(time()),
                'ios_token' => sha1(time()),
                'android_token' => sha1(time()),
            	'status' => 'nonactive'
            ]
        ];

        Guide::insert($data);
    }
}
