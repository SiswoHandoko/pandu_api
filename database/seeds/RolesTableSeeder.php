<?php

use App\Model\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        $data = [
            [
            	'name' => 'tourist',
            	'status' => 'active'
            ],
            [
            	'name' => 'guide',
            	'status' => 'active'
            ],
            [
            	'name' => 'admin',
            	'status' => 'active'
            ],
        ];

        Role::insert($data);
    }
}
