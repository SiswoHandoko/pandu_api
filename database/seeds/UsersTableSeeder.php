<?php

use App\Model\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->truncate();

        $data = [
            [
            	'firstname' => 'Asep',
            	'lastname' => 'Mulyadi',
            	'contact' => '085861960366',
            	'address' => 'Cijeungjing, Ciamis, Jawa Barat',
            	'birthdate' => '1993-08-24',
            	'username' => 'asepmulyadi',
            	'password' => Hash::make('asepmulyadi'),
            	'email' => 'asep.mulyadi011@gmail.com',
                'web_token' => sha1(time()),
                'android_token' => sha1(time()),
                'ios_token' => sha1(time()),
                'status' => 'active',
            	'remember_token' => '-'
            ],
            [
            	'firstname' => 'Siswo',
            	'lastname' => 'Handoko',
            	'contact' => '089687476161',
            	'address' => 'Surabaya Kota, Jawa Timur',
            	'birthdate' => '1994-01-20',
            	'username' => 'siswohandoko',
            	'password' => Hash::make('qwerty'),
            	'email' => 'cs.siswo.handoko@gmail.com',
                'web_token' => sha1(time()),
                'android_token' => sha1(time()),
                'ios_token' => sha1(time()),
                'status' => 'active',
            	'remember_token' => '-'
            ],
            [
            	'firstname' => 'Tommy',
            	'lastname' => 'Putra Pratama Gunawan',
            	'contact' => '085721820905',
            	'address' => 'Cianjur, Jawa Barat',
            	'birthdate' => '1993-08-24',
            	'username' => 'tommyppg',
            	'password' => Hash::make('qwerty'),
            	'email' => 'tommy@gmail.com',
                'web_token' => sha1(time()),
                'android_token' => sha1(time()),
                'ios_token' => sha1(time()),
                'status' => 'active',
            	'remember_token' => '-'
            ],
            [
            	'firstname' => 'Wiwid',
            	'lastname' => 'Widyanto',
            	'contact' => '08121002181',
            	'address' => 'Subang, Jawa Barat',
            	'birthdate' => '1993-08-24',
            	'username' => 'wiwidwidyanto',
            	'password' => Hash::make('qwerty'),
            	'email' => 'wiwid@gmail.com',
                'web_token' => sha1(time()),
                'android_token' => sha1(time()),
                'ios_token' => sha1(time()),
                'status' => 'active',
            	'remember_token' => '-'
            ],
            [
            	'firstname' => 'Narayana',
            	'lastname' => 'Wijaya',
            	'contact' => '081238347077',
            	'address' => 'Bandung, Jawa Barat',
            	'birthdate' => '1993-08-24',
            	'username' => 'narayana',
            	'password' => Hash::make('qwerty'),
            	'email' => 'narayana@gmail.com',
                'web_token' => sha1(time()),
                'android_token' => sha1(time()),
                'ios_token' => sha1(time()),
                'status' => 'active',
            	'remember_token' => '-'
            ],
        ];

        User::insert($data);
    }
}
