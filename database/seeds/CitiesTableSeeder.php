<?php

use App\Model\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->truncate();
    	
        $data = [
            [
                'province_id' => 1,
                'name' => 'KABUPATEN SIMEULUE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH SINGKIL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TENGGARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH BESAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN PIDIE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN BIREUEN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH BARAT DAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN GAYO LUES',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TAMIANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN NAGAN RAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH JAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN BENER MERIAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN PIDIE JAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA BANDA ACEH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA SABANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA LANGSA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA LHOKSEUMAWE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA SUBULUSSALAM',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN MANDAILING NATAL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TAPANULI SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TAPANULI TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TAPANULI UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TOBA SAMOSIR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LABUHAN BATU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN ASAHAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN SIMALUNGUN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN DAIRI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN KARO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN DELI SERDANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LANGKAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN PAKPAK BHARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN SAMOSIR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN SERDANG BEDAGAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN BATU BARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN PADANG LAWAS UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN PADANG LAWAS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LABUHAN BATU UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA SIBOLGA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA TANJUNG BALAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA PEMATANG SIANTAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA TEBING TINGGI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA MEDAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA BINJAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA PADANGSIDIMPUAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA GUNUNGSITOLI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PESISIR SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN SOLOK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN SIJUNJUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN TANAH DATAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PADANG PARIAMAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN AGAM',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN LIMA PULUH KOTA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PASAMAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN SOLOK SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN DHARMASRAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PASAMAN BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PADANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA SOLOK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA SAWAH LUNTO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PADANG PANJANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA BUKITTINGGI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PAYAKUMBUH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PARIAMAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN KUANTAN SINGINGI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN INDRAGIRI HULU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN INDRAGIRI HILIR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN PELALAWAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN S I A K',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN KAMPAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN ROKAN HULU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN BENGKALIS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN ROKAN HILIR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN KEPULAUAN MERANTI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KOTA PEKANBARU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 4,
                'name' => 'KOTA D U M A I',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN KERINCI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN MERANGIN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN SAROLANGUN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN BATANG HARI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN MUARO JAMBI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN TEBO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN BUNGO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KOTA JAMBI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 5,
                'name' => 'KOTA SUNGAI PENUH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ULU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ILIR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUARA ENIM',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN LAHAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUSI RAWAS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUSI BANYUASIN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN BANYU ASIN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN ILIR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN EMPAT LAWANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUSI RAWAS UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA PALEMBANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA PRABUMULIH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA PAGAR ALAM',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA LUBUKLINGGAU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN BENGKULU SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN REJANG LEBONG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN BENGKULU UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN KAUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN SELUMA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN MUKOMUKO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN LEBONG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN KEPAHIANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN BENGKULU TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 7,
                'name' => 'KOTA BENGKULU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN TANGGAMUS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN WAY KANAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN TULANGBAWANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN PESAWARAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN PRINGSEWU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN MESUJI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN TULANG BAWANG BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN PESISIR BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KOTA BANDAR LAMPUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 8,
                'name' => 'KOTA METRO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BELITUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BELITUNG TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 9,
                'name' => 'KOTA PANGKAL PINANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN KARIMUN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN BINTAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN NATUNA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN LINGGA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 10,
                'name' => 'KOTA B A T A M',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 10,
                'name' => 'KOTA TANJUNG PINANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 11,
                'name' => 'KABUPATEN KEPULAUAN SERIBU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA PUSAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BOGOR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN SUKABUMI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN CIANJUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BANDUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN GARUT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN TASIKMALAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN CIAMIS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN KUNINGAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN CIREBON',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN MAJALENGKA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN SUMEDANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN INDRAMAYU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN SUBANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN PURWAKARTA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN KARAWANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BEKASI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BANDUNG BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN PANGANDARAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BOGOR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA SUKABUMI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BANDUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA CIREBON',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BEKASI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA DEPOK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA CIMAHI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA TASIKMALAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BANJAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN CILACAP',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BANYUMAS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PURBALINGGA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BANJARNEGARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KEBUMEN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PURWOREJO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN WONOSOBO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN MAGELANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BOYOLALI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KLATEN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN SUKOHARJO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN WONOGIRI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KARANGANYAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN SRAGEN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN GROBOGAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BLORA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN REMBANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PATI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KUDUS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN JEPARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN DEMAK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN SEMARANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN TEMANGGUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KENDAL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BATANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PEKALONGAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PEMALANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN TEGAL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BREBES',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA MAGELANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA SURAKARTA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA SALATIGA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA SEMARANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA PEKALONGAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA TEGAL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN KULON PROGO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN BANTUL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN GUNUNG KIDUL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN SLEMAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 14,
                'name' => 'KOTA YOGYAKARTA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PACITAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PONOROGO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN TRENGGALEK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN TULUNGAGUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BLITAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN KEDIRI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MALANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN LUMAJANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN JEMBER',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BANYUWANGI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BONDOWOSO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SITUBONDO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PROBOLINGGO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PASURUAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SIDOARJO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MOJOKERTO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN JOMBANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN NGANJUK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MADIUN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MAGETAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN NGAWI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BOJONEGORO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN TUBAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN LAMONGAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN GRESIK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BANGKALAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SAMPANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PAMEKASAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SUMENEP',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA KEDIRI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA BLITAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA MALANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA PROBOLINGGO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA PASURUAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA MOJOKERTO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA MADIUN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA SURABAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA BATU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN PANDEGLANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN LEBAK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN TANGERANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN SERANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA TANGERANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA CILEGON',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA SERANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA TANGERANG SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN JEMBRANA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN TABANAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN BADUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN GIANYAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN KLUNGKUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN BANGLI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN KARANG ASEM',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN BULELENG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 17,
                'name' => 'KOTA DENPASAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN SUMBAWA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN DOMPU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN BIMA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN SUMBAWA BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KOTA MATARAM',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 18,
                'name' => 'KOTA BIMA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN KUPANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN TIMOR TENGAH UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN BELU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN ALOR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN LEMBATA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN FLORES TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SIKKA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN ENDE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN NGADA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MANGGARAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN ROTE NDAO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MANGGARAI BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA BARAT DAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN NAGEKEO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MANGGARAI TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SABU RAIJUA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MALAKA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 19,
                'name' => 'KOTA KUPANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SAMBAS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN BENGKAYANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN LANDAK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN MEMPAWAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SANGGAU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KETAPANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SINTANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KAPUAS HULU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SEKADAU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN MELAWI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KAYONG UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KUBU RAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KOTA PONTIANAK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 20,
                'name' => 'KOTA SINGKAWANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KOTAWARINGIN BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KAPUAS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN BARITO SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN BARITO UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN SUKAMARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN LAMANDAU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN SERUYAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KATINGAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN PULANG PISAU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN GUNUNG MAS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN BARITO TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN MURUNG RAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 21,
                'name' => 'KOTA PALANGKA RAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TANAH LAUT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN KOTA BARU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN BANJAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN BARITO KUALA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TAPIN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN HULU SUNGAI SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN HULU SUNGAI TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN HULU SUNGAI UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TABALONG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TANAH BUMBU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN BALANGAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KOTA BANJARMASIN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 22,
                'name' => 'KOTA BANJAR BARU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN PASER',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN KUTAI BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN KUTAI KARTANEGARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN KUTAI TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN BERAU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN PENAJAM PASER UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN MAHAKAM HULU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KOTA BALIKPAPAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KOTA SAMARINDA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 23,
                'name' => 'KOTA BONTANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN MALINAU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN BULUNGAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN TANA TIDUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN NUNUKAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 24,
                'name' => 'KOTA TARAKAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN KEPULAUAN SANGIHE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN KEPULAUAN TALAUD',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA TENGGARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA MANADO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA BITUNG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA TOMOHON',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA KOTAMOBAGU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BANGGAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN MOROWALI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN POSO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN DONGGALA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN TOLI-TOLI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BUOL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN PARIGI MOUTONG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN TOJO UNA-UNA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN SIGI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BANGGAI LAUT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN MOROWALI UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 26,
                'name' => 'KOTA PALU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN KEPULAUAN SELAYAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BULUKUMBA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BANTAENG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN JENEPONTO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN TAKALAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN GOWA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN SINJAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN MAROS',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BARRU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BONE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN SOPPENG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN WAJO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN SIDENRENG RAPPANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN PINRANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN ENREKANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN LUWU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN TANA TORAJA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN LUWU UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN LUWU TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN TORAJA UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KOTA MAKASSAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KOTA PAREPARE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 27,
                'name' => 'KOTA PALOPO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN MUNA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KOLAKA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BOMBANA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN WAKATOBI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KOLAKA UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KOLAKA TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE KEPULAUAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN MUNA BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KOTA KENDARI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 28,
                'name' => 'KOTA BAUBAU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN BOALEMO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN GORONTALO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN POHUWATO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN BONE BOLANGO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN GORONTALO UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 29,
                'name' => 'KOTA GORONTALO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAJENE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN POLEWALI MANDAR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMASA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMUJU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMUJU UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMUJU TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU TENGGARA BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU TENGGARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN BURU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN KEPULAUAN ARU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN SERAM BAGIAN BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU BARAT DAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN BURU SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KOTA AMBON',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 31,
                'name' => 'KOTA TUAL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA BARAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN KEPULAUAN SULA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA UTARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA TIMUR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN PULAU MOROTAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN PULAU TALIABU',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KOTA TERNATE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 32,
                'name' => 'KOTA TIDORE KEPULAUAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN FAKFAK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN KAIMANA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN TELUK WONDAMA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN TELUK BINTUNI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN MANOKWARI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN SORONG SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN SORONG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN RAJA AMPAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN TAMBRAUW',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN MAYBRAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN MANOKWARI SELATAN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 33,
                'name' => 'KOTA SORONG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MERAUKE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN JAYAWIJAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN JAYAPURA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN NABIRE',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN KEPULAUAN YAPEN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN BIAK NUMFOR',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PANIAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PUNCAK JAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MIMIKA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN BOVEN DIGOEL',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MAPPI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN ASMAT',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN YAHUKIMO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN TOLIKARA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN SARMI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN KEEROM',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN WAROPEN',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN SUPIORI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MAMBERAMO RAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN NDUGA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN LANNY JAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MAMBERAMO TENGAH',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN YALIMO',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PUNCAK',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN DOGIYAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN INTAN JAYA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN DEIYAI',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 34,
                'name' => 'KOTA JAYAPURA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'deleted'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA',
                'image_url'=>'http://api.dipanduapp.com/public/images/cities/default_city.png','rate' => 0,
                'status' => 'active'
            ],
        ];
        
        City::insert($data);
    }
}
