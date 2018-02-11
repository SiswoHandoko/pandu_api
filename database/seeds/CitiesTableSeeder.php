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
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH SINGKIL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TENGGARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH BESAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN PIDIE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN BIREUEN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH BARAT DAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN GAYO LUES',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TAMIANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN NAGAN RAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH JAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN BENER MERIAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN PIDIE JAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA BANDA ACEH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA SABANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA LANGSA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA LHOKSEUMAWE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA SUBULUSSALAM',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN MANDAILING NATAL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TAPANULI SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TAPANULI TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TAPANULI UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TOBA SAMOSIR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LABUHAN BATU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN ASAHAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN SIMALUNGUN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN DAIRI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN KARO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN DELI SERDANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LANGKAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN PAKPAK BHARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN SAMOSIR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN SERDANG BEDAGAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN BATU BARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN PADANG LAWAS UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN PADANG LAWAS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LABUHAN BATU UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA SIBOLGA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA TANJUNG BALAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA PEMATANG SIANTAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA TEBING TINGGI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA MEDAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA BINJAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA PADANGSIDIMPUAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA GUNUNGSITOLI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PESISIR SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN SOLOK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN SIJUNJUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN TANAH DATAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PADANG PARIAMAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN AGAM',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN LIMA PULUH KOTA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PASAMAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN SOLOK SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN DHARMASRAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PASAMAN BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PADANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA SOLOK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA SAWAH LUNTO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PADANG PANJANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA BUKITTINGGI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PAYAKUMBUH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PARIAMAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN KUANTAN SINGINGI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN INDRAGIRI HULU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN INDRAGIRI HILIR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN PELALAWAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN S I A K',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN KAMPAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN ROKAN HULU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN BENGKALIS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN ROKAN HILIR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN KEPULAUAN MERANTI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KOTA PEKANBARU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KOTA D U M A I',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN KERINCI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN MERANGIN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN SAROLANGUN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN BATANG HARI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN MUARO JAMBI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN TEBO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN BUNGO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KOTA JAMBI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KOTA SUNGAI PENUH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ULU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ILIR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUARA ENIM',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN LAHAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUSI RAWAS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUSI BANYUASIN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN BANYU ASIN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN ILIR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN EMPAT LAWANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUSI RAWAS UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA PALEMBANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA PRABUMULIH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA PAGAR ALAM',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA LUBUKLINGGAU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN BENGKULU SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN REJANG LEBONG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN BENGKULU UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN KAUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN SELUMA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN MUKOMUKO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN LEBONG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN KEPAHIANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN BENGKULU TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KOTA BENGKULU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN TANGGAMUS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN WAY KANAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN TULANGBAWANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN PESAWARAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN PRINGSEWU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN MESUJI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN TULANG BAWANG BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN PESISIR BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KOTA BANDAR LAMPUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KOTA METRO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BELITUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BELITUNG TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KOTA PANGKAL PINANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN KARIMUN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN BINTAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN NATUNA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN LINGGA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KOTA B A T A M',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KOTA TANJUNG PINANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KABUPATEN KEPULAUAN SERIBU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA PUSAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BOGOR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN SUKABUMI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN CIANJUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BANDUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN GARUT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN TASIKMALAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN CIAMIS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN KUNINGAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN CIREBON',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN MAJALENGKA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN SUMEDANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN INDRAMAYU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN SUBANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN PURWAKARTA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN KARAWANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BEKASI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BANDUNG BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN PANGANDARAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BOGOR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA SUKABUMI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BANDUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA CIREBON',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BEKASI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA DEPOK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA CIMAHI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA TASIKMALAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BANJAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN CILACAP',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BANYUMAS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PURBALINGGA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BANJARNEGARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KEBUMEN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PURWOREJO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN WONOSOBO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN MAGELANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BOYOLALI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KLATEN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN SUKOHARJO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN WONOGIRI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KARANGANYAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN SRAGEN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN GROBOGAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BLORA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN REMBANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PATI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KUDUS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN JEPARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN DEMAK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN SEMARANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN TEMANGGUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KENDAL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BATANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PEKALONGAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PEMALANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN TEGAL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BREBES',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA MAGELANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA SURAKARTA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA SALATIGA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA SEMARANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA PEKALONGAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA TEGAL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN KULON PROGO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN BANTUL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN GUNUNG KIDUL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN SLEMAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KOTA YOGYAKARTA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PACITAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PONOROGO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN TRENGGALEK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN TULUNGAGUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BLITAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN KEDIRI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MALANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN LUMAJANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN JEMBER',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BANYUWANGI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BONDOWOSO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SITUBONDO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PROBOLINGGO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PASURUAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SIDOARJO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MOJOKERTO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN JOMBANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN NGANJUK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MADIUN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MAGETAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN NGAWI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BOJONEGORO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN TUBAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN LAMONGAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN GRESIK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BANGKALAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SAMPANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PAMEKASAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SUMENEP',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA KEDIRI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA BLITAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA MALANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA PROBOLINGGO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA PASURUAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA MOJOKERTO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA MADIUN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA SURABAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA BATU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN PANDEGLANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN LEBAK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN TANGERANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN SERANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA TANGERANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA CILEGON',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA SERANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA TANGERANG SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN JEMBRANA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN TABANAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN BADUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN GIANYAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN KLUNGKUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN BANGLI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN KARANG ASEM',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN BULELENG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KOTA DENPASAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN SUMBAWA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN DOMPU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN BIMA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN SUMBAWA BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KOTA MATARAM',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KOTA BIMA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN KUPANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN TIMOR TENGAH UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN BELU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN ALOR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN LEMBATA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN FLORES TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SIKKA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN ENDE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN NGADA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MANGGARAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN ROTE NDAO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MANGGARAI BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA BARAT DAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN NAGEKEO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MANGGARAI TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SABU RAIJUA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MALAKA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KOTA KUPANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SAMBAS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN BENGKAYANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN LANDAK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN MEMPAWAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SANGGAU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KETAPANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SINTANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KAPUAS HULU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SEKADAU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN MELAWI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KAYONG UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KUBU RAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KOTA PONTIANAK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KOTA SINGKAWANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KOTAWARINGIN BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KAPUAS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN BARITO SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN BARITO UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN SUKAMARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN LAMANDAU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN SERUYAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KATINGAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN PULANG PISAU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN GUNUNG MAS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN BARITO TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN MURUNG RAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KOTA PALANGKA RAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TANAH LAUT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN KOTA BARU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN BANJAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN BARITO KUALA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TAPIN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN HULU SUNGAI SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN HULU SUNGAI TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN HULU SUNGAI UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TABALONG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TANAH BUMBU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN BALANGAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KOTA BANJARMASIN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KOTA BANJAR BARU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN PASER',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN KUTAI BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN KUTAI KARTANEGARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN KUTAI TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN BERAU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN PENAJAM PASER UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN MAHAKAM HULU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KOTA BALIKPAPAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KOTA SAMARINDA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KOTA BONTANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN MALINAU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN BULUNGAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN TANA TIDUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN NUNUKAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KOTA TARAKAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN KEPULAUAN SANGIHE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN KEPULAUAN TALAUD',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA TENGGARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA MANADO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA BITUNG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA TOMOHON',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA KOTAMOBAGU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BANGGAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN MOROWALI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN POSO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN DONGGALA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN TOLI-TOLI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BUOL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN PARIGI MOUTONG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN TOJO UNA-UNA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN SIGI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BANGGAI LAUT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN MOROWALI UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KOTA PALU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN KEPULAUAN SELAYAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BULUKUMBA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BANTAENG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN JENEPONTO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN TAKALAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN GOWA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN SINJAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN MAROS',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BARRU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BONE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN SOPPENG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN WAJO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN SIDENRENG RAPPANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN PINRANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN ENREKANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN LUWU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN TANA TORAJA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN LUWU UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN LUWU TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN TORAJA UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KOTA MAKASSAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KOTA PAREPARE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KOTA PALOPO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN MUNA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KOLAKA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BOMBANA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN WAKATOBI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KOLAKA UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KOLAKA TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE KEPULAUAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN MUNA BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KOTA KENDARI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KOTA BAUBAU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN BOALEMO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN GORONTALO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN POHUWATO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN BONE BOLANGO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN GORONTALO UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KOTA GORONTALO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAJENE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN POLEWALI MANDAR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMASA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMUJU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMUJU UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMUJU TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU TENGGARA BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU TENGGARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN BURU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN KEPULAUAN ARU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN SERAM BAGIAN BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU BARAT DAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN BURU SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KOTA AMBON',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KOTA TUAL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA BARAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN KEPULAUAN SULA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA UTARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA TIMUR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN PULAU MOROTAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN PULAU TALIABU',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KOTA TERNATE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KOTA TIDORE KEPULAUAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN FAKFAK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN KAIMANA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN TELUK WONDAMA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN TELUK BINTUNI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN MANOKWARI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN SORONG SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN SORONG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN RAJA AMPAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN TAMBRAUW',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN MAYBRAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN MANOKWARI SELATAN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KOTA SORONG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MERAUKE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN JAYAWIJAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN JAYAPURA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN NABIRE',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN KEPULAUAN YAPEN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN BIAK NUMFOR',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PANIAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PUNCAK JAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MIMIKA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN BOVEN DIGOEL',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MAPPI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN ASMAT',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN YAHUKIMO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN TOLIKARA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN SARMI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN KEEROM',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN WAROPEN',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN SUPIORI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MAMBERAMO RAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN NDUGA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN LANNY JAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MAMBERAMO TENGAH',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN YALIMO',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PUNCAK',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN DOGIYAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN INTAN JAYA',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN DEIYAI',
                'rate' => 0,
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KOTA JAYAPURA',
                'rate' => 0,
                'status' => 'active'
            ]
        ];
        
        City::insert($data);
    }
}
