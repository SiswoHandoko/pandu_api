<?php

use App\Model\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->truncate();
    	
        $data = [
            [
                'name' => 'ACEH',
                'status' => 'active'
            ],
            [
                'name' => 'SUMATERA UTARA',
                'status' => 'active'
            ],
            [
                'name' => 'SUMATERA BARAT',
                'status' => 'active'
            ],
            [
                'name' => 'RIAU',
                'status' => 'active'
            ],
            [
                'name' => 'JAMBI',
                'status' => 'active'
            ],
            [
                'name' => 'SUMATERA SELATAN',
                'status' => 'active'
            ],
            [
                'name' => 'BENGKULU',
                'status' => 'active'
            ],
            [
                'name' => 'LAMPUNG',
                'status' => 'active'
            ],
            [
                'name' => 'KEPULAUAN BANGKA BELITUNG',
                'status' => 'active'
            ],
            [
                'name' => 'KEPULAUAN RIAU',
                'status' => 'active'
            ],
            [
                'name' => 'DKI JAKARTA',
                'status' => 'active'
            ],
            [
                'name' => 'JAWA BARAT',
                'status' => 'active'
            ],
            [
                'name' => 'JAWA TENGAH',
                'status' => 'active'
            ],
            [
                'name' => 'DI YOGYAKARTA',
                'status' => 'active'
            ],
            [
                'name' => 'JAWA TIMUR',
                'status' => 'active'
            ],
            [
                'name' => 'BANTEN',
                'status' => 'active'
            ],
            [
                'name' => 'BALI',
                'status' => 'active'
            ],
            [
                'name' => 'NUSA TENGGARA BARAT',
                'status' => 'active'
            ],
            [
                'name' => 'NUSA TENGGARA TIMUR',
                'status' => 'active'
            ],
            [
                'name' => 'KALIMANTAN BARAT',
                'status' => 'active'
            ],
            [
                'name' => 'KALIMANTAN TENGAH',
                'status' => 'active'
            ],
            [
                'name' => 'KALIMANTAN SELATAN',
                'status' => 'active'
            ],
            [
                'name' => 'KALIMANTAN TIMUR',
                'status' => 'active'
            ],
            [
                'name' => 'KALIMANTAN UTARA',
                'status' => 'active'
            ],
            [
                'name' => 'SULAWESI UTARA',
                'status' => 'active'
            ],
            [
                'name' => 'SULAWESI TENGAH',
                'status' => 'active'
            ],
            [
                'name' => 'SULAWESI SELATAN',
                'status' => 'active'
            ],
            [
                'name' => 'SULAWESI TENGGARA',
                'status' => 'active'
            ],
            [
                'name' => 'GORONTALO',
                'status' => 'active'
            ],
            [
                'name' => 'SULAWESI BARAT',
                'status' => 'active'
            ],
            [
                'name' => 'MALUKU',
                'status' => 'active'
            ],
            [
                'name' => 'MALUKU UTARA',
                'status' => 'active'
            ],
            [
                'name' => 'PAPUA BARAT',
                'status' => 'active'
            ],
            [
                'name' => 'PAPUA',
                'status' => 'active'
            ]
        ];
        
        Province::insert($data);
    }
}
