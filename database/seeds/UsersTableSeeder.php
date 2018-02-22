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
        // 'web_token' => sha1(time()),
        // 'android_token' => sha1(time()),
        // 'ios_token' => sha1(time()),
        $data = [
            [
            	'role_id' => '3',
            	'firstname' => 'Asep',
            	'lastname' => 'Mulyadi',
            	'contact' => '085861960366',
            	'address' => 'Cijeungjing, Ciamis, Jawa Barat',
            	'birthdate' => '1993-08-24',
            	'username' => 'asepmulyadi',
            	'password' => Hash::make('asepmulyadi'),
            	'email' => 'asep.mulyadi011@gmail.com',
                'web_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'android_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'ios_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'photo' => 'default_img.png',
                'is_login' => false,
                'status' => 'active',
            	'remember_token' => '-'
            ],
            [
                'role_id' => '2',
            	'firstname' => 'Siswo',
            	'lastname' => 'Handoko',
            	'contact' => '089687476161',
            	'address' => 'Surabaya Kota, Jawa Timur',
            	'birthdate' => '1994-01-20',
            	'username' => 'siswohandoko',
            	'password' => Hash::make('qwerty'),
            	'email' => 'cs.siswo.handoko@gmail.com',
                'web_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'android_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'ios_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'photo' => 'default_img.png',
                'is_login' => false,
                'status' => 'active',
            	'remember_token' => '-'
            ],
            [
                'role_id' => '1',
            	'firstname' => 'Tommy',
            	'lastname' => 'Putra Pratama Gunawan',
            	'contact' => '085721820905',
            	'address' => 'Cianjur, Jawa Barat',
            	'birthdate' => '1993-08-24',
            	'username' => 'tommyppg',
            	'password' => Hash::make('qwerty'),
            	'email' => 'tommy@gmail.com',
                'web_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'android_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'ios_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'photo' => 'default_img.png',
                'is_login' => false,
                'status' => 'active',
            	'remember_token' => '-'
            ],
            [
                'role_id' => '1',
            	'firstname' => 'Faizal',
            	'lastname' => 'Muhammad',
            	'contact' => '085795678930',
            	'address' => 'Sukabumi, Jawa Barat',
            	'birthdate' => '1995-31-12',
            	'username' => 'faizal',
            	'password' => Hash::make('qwerty'),
            	'email' => 'faizal@gmail.com',
                'web_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'android_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'ios_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'photo' => 'default_img.png',
                'is_login' => false,
                'status' => 'active',
            	'remember_token' => '-'
            ],
            [
                'role_id' => '1',
            	'firstname' => 'Wiwid',
            	'lastname' => 'Widyanto',
            	'contact' => '08121002181',
            	'address' => 'Subang, Jawa Barat',
            	'birthdate' => '1993-08-24',
            	'username' => 'wiwidwidyanto',
            	'password' => Hash::make('qwerty'),
            	'email' => 'wiwid@gmail.com',
                'web_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'android_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'ios_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'photo' => 'default_img.png',
                'is_login' => false,
                'status' => 'active',
            	'remember_token' => '-'
            ],
            [
                'role_id' => '1',
            	'firstname' => 'Narayana',
            	'lastname' => 'Wijaya',
            	'contact' => '081238347077',
            	'address' => 'Bandung, Jawa Barat',
            	'birthdate' => '1993-08-24',
            	'username' => 'narayana',
            	'password' => Hash::make('qwerty'),
            	'email' => 'narayana@gmail.com',
                'web_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'android_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'ios_token' => '77a64fae487baef2ae395a80db6b82549723219a',
                'photo' => 'default_img.png',
                'is_login' => false,
                'status' => 'active',
            	'remember_token' => '-'
            ],
        ];

        User::insert($data);
    }
}
