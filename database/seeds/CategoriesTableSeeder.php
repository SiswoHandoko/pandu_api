<?php

use App\Model\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $data = [
            [
            	'name' => 'Beach',
                'status' => 'active'
            ],
            [
            	'bank' => 'Park',
                'status' => 'active'
            ],
            [
            	'bank' => 'Food',
                'status' => 'active'
            ]
        ];

        Category::insert($data);
    }
}
