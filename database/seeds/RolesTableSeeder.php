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

        $data = array(
            [
            	'name' => '-',
            	'status' => 'nonactive'
            ]
        );

        foreach ($data as $value) {
            Role::create($value);
        }
    }
}
