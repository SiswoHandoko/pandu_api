<?php

use App\Model\Picture;
use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->truncate();
    	
        $data = array(
            [
            	'tp_id' => 1,
            	'image_url' => 'picture_1_1.jpg',
            	'status' => 'active'
            ]
        );
        
        foreach ($data as $value) {
            Picture::create($value);
        }
    }
}
