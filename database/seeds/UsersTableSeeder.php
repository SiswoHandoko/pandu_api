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
            	'midlename' => null,
            	'lastname' => 'Mulyadi',
            	'contact' => '085861960366',
            	'address' => 'Cijeungjing, Ciamis, Jawa Barat',
            	'birthdate' => '1993-08-24',
            	'username' => 'asepmulyadi',
            	'password' => Hash::make('asepmulyadi'),
            	'email' => 'asep.mulyadi011@gmail.com',
                'api_token' => sha1(time()),
                'status' => 'nonactive',
            	'remember_token' => '-'
            ]
        ];

        User::insert($data);
    }
}
