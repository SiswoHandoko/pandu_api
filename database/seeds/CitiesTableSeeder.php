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
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH SINGKIL',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TENGGARA',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH BESAR',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN PIDIE',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN BIREUEN',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH BARAT DAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN GAYO LUES',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH TAMIANG',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN NAGAN RAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN ACEH JAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN BENER MERIAH',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KABUPATEN PIDIE JAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA BANDA ACEH',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA SABANG',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA LANGSA',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA LHOKSEUMAWE',
                'status' => 'active'
            ],
            [
                'province_id' => 1,
                'name' => 'KOTA SUBULUSSALAM',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN MANDAILING NATAL',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TAPANULI SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TAPANULI TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TAPANULI UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN TOBA SAMOSIR',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LABUHAN BATU',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN ASAHAN',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN SIMALUNGUN',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN DAIRI',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN KARO',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN DELI SERDANG',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LANGKAT',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN PAKPAK BHARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN SAMOSIR',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN SERDANG BEDAGAI',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN BATU BARA',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN PADANG LAWAS UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN PADANG LAWAS',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN LABUHAN BATU UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KABUPATEN NIAS BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA SIBOLGA',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA TANJUNG BALAI',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA PEMATANG SIANTAR',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA TEBING TINGGI',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA MEDAN',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA BINJAI',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA PADANGSIDIMPUAN',
                'status' => 'active'
            ],
            [
                'province_id' => 2,
                'name' => 'KOTA GUNUNGSITOLI',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PESISIR SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN SOLOK',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN SIJUNJUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN TANAH DATAR',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PADANG PARIAMAN',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN AGAM',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN LIMA PULUH KOTA',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PASAMAN',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN SOLOK SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN DHARMASRAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KABUPATEN PASAMAN BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PADANG',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA SOLOK',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA SAWAH LUNTO',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PADANG PANJANG',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA BUKITTINGGI',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PAYAKUMBUH',
                'status' => 'active'
            ],
            [
                'province_id' => 3,
                'name' => 'KOTA PARIAMAN',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN KUANTAN SINGINGI',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN INDRAGIRI HULU',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN INDRAGIRI HILIR',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN PELALAWAN',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN S I A K',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN KAMPAR',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN ROKAN HULU',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN BENGKALIS',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN ROKAN HILIR',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KABUPATEN KEPULAUAN MERANTI',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KOTA PEKANBARU',
                'status' => 'active'
            ],
            [
                'province_id' => 4,
                'name' => 'KOTA D U M A I',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN KERINCI',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN MERANGIN',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN SAROLANGUN',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN BATANG HARI',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN MUARO JAMBI',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN TEBO',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KABUPATEN BUNGO',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KOTA JAMBI',
                'status' => 'active'
            ],
            [
                'province_id' => 5,
                'name' => 'KOTA SUNGAI PENUH',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ULU',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ILIR',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUARA ENIM',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN LAHAT',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUSI RAWAS',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUSI BANYUASIN',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN BANYU ASIN',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN OGAN ILIR',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN EMPAT LAWANG',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KABUPATEN MUSI RAWAS UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA PALEMBANG',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA PRABUMULIH',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA PAGAR ALAM',
                'status' => 'active'
            ],
            [
                'province_id' => 6,
                'name' => 'KOTA LUBUKLINGGAU',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN BENGKULU SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN REJANG LEBONG',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN BENGKULU UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN KAUR',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN SELUMA',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN MUKOMUKO',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN LEBONG',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN KEPAHIANG',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KABUPATEN BENGKULU TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 7,
                'name' => 'KOTA BENGKULU',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN TANGGAMUS',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN LAMPUNG UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN WAY KANAN',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN TULANGBAWANG',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN PESAWARAN',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN PRINGSEWU',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN MESUJI',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN TULANG BAWANG BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KABUPATEN PESISIR BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KOTA BANDAR LAMPUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 8,
                'name' => 'KOTA METRO',
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA',
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BELITUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BANGKA SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KABUPATEN BELITUNG TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 9,
                'name' => 'KOTA PANGKAL PINANG',
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN KARIMUN',
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN BINTAN',
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN NATUNA',
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN LINGGA',
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KOTA B A T A M',
                'status' => 'active'
            ],
            [
                'province_id' => 10,
                'name' => 'KOTA TANJUNG PINANG',
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KABUPATEN KEPULAUAN SERIBU',
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA PUSAT',
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 11,
                'name' => 'KOTA JAKARTA UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BOGOR',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN SUKABUMI',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN CIANJUR',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BANDUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN GARUT',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN TASIKMALAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN CIAMIS',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN KUNINGAN',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN CIREBON',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN MAJALENGKA',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN SUMEDANG',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN INDRAMAYU',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN SUBANG',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN PURWAKARTA',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN KARAWANG',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BEKASI',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN BANDUNG BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KABUPATEN PANGANDARAN',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BOGOR',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA SUKABUMI',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BANDUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA CIREBON',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BEKASI',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA DEPOK',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA CIMAHI',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA TASIKMALAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 12,
                'name' => 'KOTA BANJAR',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN CILACAP',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BANYUMAS',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PURBALINGGA',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BANJARNEGARA',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KEBUMEN',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PURWOREJO',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN WONOSOBO',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN MAGELANG',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BOYOLALI',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KLATEN',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN SUKOHARJO',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN WONOGIRI',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KARANGANYAR',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN SRAGEN',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN GROBOGAN',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BLORA',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN REMBANG',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PATI',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KUDUS',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN JEPARA',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN DEMAK',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN SEMARANG',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN TEMANGGUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN KENDAL',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BATANG',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PEKALONGAN',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN PEMALANG',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN TEGAL',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KABUPATEN BREBES',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA MAGELANG',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA SURAKARTA',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA SALATIGA',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA SEMARANG',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA PEKALONGAN',
                'status' => 'active'
            ],
            [
                'province_id' => 13,
                'name' => 'KOTA TEGAL',
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN KULON PROGO',
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN BANTUL',
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN GUNUNG KIDUL',
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KABUPATEN SLEMAN',
                'status' => 'active'
            ],
            [
                'province_id' => 14,
                'name' => 'KOTA YOGYAKARTA',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PACITAN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PONOROGO',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN TRENGGALEK',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN TULUNGAGUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BLITAR',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN KEDIRI',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MALANG',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN LUMAJANG',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN JEMBER',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BANYUWANGI',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BONDOWOSO',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SITUBONDO',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PROBOLINGGO',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PASURUAN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SIDOARJO',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MOJOKERTO',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN JOMBANG',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN NGANJUK',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MADIUN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN MAGETAN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN NGAWI',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BOJONEGORO',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN TUBAN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN LAMONGAN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN GRESIK',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN BANGKALAN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SAMPANG',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN PAMEKASAN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KABUPATEN SUMENEP',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA KEDIRI',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA BLITAR',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA MALANG',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA PROBOLINGGO',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA PASURUAN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA MOJOKERTO',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA MADIUN',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA SURABAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 15,
                'name' => 'KOTA BATU',
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN PANDEGLANG',
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN LEBAK',
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN TANGERANG',
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KABUPATEN SERANG',
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA TANGERANG',
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA CILEGON',
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA SERANG',
                'status' => 'active'
            ],
            [
                'province_id' => 16,
                'name' => 'KOTA TANGERANG SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN JEMBRANA',
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN TABANAN',
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN BADUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN GIANYAR',
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN KLUNGKUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN BANGLI',
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN KARANG ASEM',
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KABUPATEN BULELENG',
                'status' => 'active'
            ],
            [
                'province_id' => 17,
                'name' => 'KOTA DENPASAR',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN SUMBAWA',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN DOMPU',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN BIMA',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN SUMBAWA BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KABUPATEN LOMBOK UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KOTA MATARAM',
                'status' => 'active'
            ],
            [
                'province_id' => 18,
                'name' => 'KOTA BIMA',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN KUPANG',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN TIMOR TENGAH UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN BELU',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN ALOR',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN LEMBATA',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN FLORES TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SIKKA',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN ENDE',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN NGADA',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MANGGARAI',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN ROTE NDAO',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MANGGARAI BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SUMBA BARAT DAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN NAGEKEO',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MANGGARAI TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN SABU RAIJUA',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KABUPATEN MALAKA',
                'status' => 'active'
            ],
            [
                'province_id' => 19,
                'name' => 'KOTA KUPANG',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SAMBAS',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN BENGKAYANG',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN LANDAK',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN MEMPAWAH',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SANGGAU',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KETAPANG',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SINTANG',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KAPUAS HULU',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN SEKADAU',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN MELAWI',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KAYONG UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KABUPATEN KUBU RAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KOTA PONTIANAK',
                'status' => 'active'
            ],
            [
                'province_id' => 20,
                'name' => 'KOTA SINGKAWANG',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KOTAWARINGIN BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KAPUAS',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN BARITO SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN BARITO UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN SUKAMARA',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN LAMANDAU',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN SERUYAN',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN KATINGAN',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN PULANG PISAU',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN GUNUNG MAS',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN BARITO TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KABUPATEN MURUNG RAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 21,
                'name' => 'KOTA PALANGKA RAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TANAH LAUT',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN KOTA BARU',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN BANJAR',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN BARITO KUALA',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TAPIN',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN HULU SUNGAI SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN HULU SUNGAI TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN HULU SUNGAI UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TABALONG',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN TANAH BUMBU',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KABUPATEN BALANGAN',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KOTA BANJARMASIN',
                'status' => 'active'
            ],
            [
                'province_id' => 22,
                'name' => 'KOTA BANJAR BARU',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN PASER',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN KUTAI BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN KUTAI KARTANEGARA',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN KUTAI TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN BERAU',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN PENAJAM PASER UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KABUPATEN MAHAKAM HULU',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KOTA BALIKPAPAN',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KOTA SAMARINDA',
                'status' => 'active'
            ],
            [
                'province_id' => 23,
                'name' => 'KOTA BONTANG',
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN MALINAU',
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN BULUNGAN',
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN TANA TIDUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KABUPATEN NUNUKAN',
                'status' => 'active'
            ],
            [
                'province_id' => 24,
                'name' => 'KOTA TARAKAN',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN KEPULAUAN SANGIHE',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN KEPULAUAN TALAUD',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN MINAHASA TENGGARA',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA MANADO',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA BITUNG',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA TOMOHON',
                'status' => 'active'
            ],
            [
                'province_id' => 25,
                'name' => 'KOTA KOTAMOBAGU',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BANGGAI',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN MOROWALI',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN POSO',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN DONGGALA',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN TOLI-TOLI',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BUOL',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN PARIGI MOUTONG',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN TOJO UNA-UNA',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN SIGI',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN BANGGAI LAUT',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KABUPATEN MOROWALI UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 26,
                'name' => 'KOTA PALU',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN KEPULAUAN SELAYAR',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BULUKUMBA',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BANTAENG',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN JENEPONTO',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN TAKALAR',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN GOWA',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN SINJAI',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN MAROS',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BARRU',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN BONE',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN SOPPENG',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN WAJO',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN SIDENRENG RAPPANG',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN PINRANG',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN ENREKANG',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN LUWU',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN TANA TORAJA',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN LUWU UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN LUWU TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KABUPATEN TORAJA UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KOTA MAKASSAR',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KOTA PAREPARE',
                'status' => 'active'
            ],
            [
                'province_id' => 27,
                'name' => 'KOTA PALOPO',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN MUNA',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KOLAKA',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BOMBANA',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN WAKATOBI',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KOLAKA UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KOLAKA TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN KONAWE KEPULAUAN',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN MUNA BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KABUPATEN BUTON SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KOTA KENDARI',
                'status' => 'active'
            ],
            [
                'province_id' => 28,
                'name' => 'KOTA BAUBAU',
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN BOALEMO',
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN GORONTALO',
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN POHUWATO',
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN BONE BOLANGO',
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KABUPATEN GORONTALO UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 29,
                'name' => 'KOTA GORONTALO',
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAJENE',
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN POLEWALI MANDAR',
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMASA',
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMUJU',
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMUJU UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 30,
                'name' => 'KABUPATEN MAMUJU TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU TENGGARA BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU TENGGARA',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN BURU',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN KEPULAUAN ARU',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN SERAM BAGIAN BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN MALUKU BARAT DAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KABUPATEN BURU SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KOTA AMBON',
                'status' => 'active'
            ],
            [
                'province_id' => 31,
                'name' => 'KOTA TUAL',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA BARAT',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN KEPULAUAN SULA',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA UTARA',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN HALMAHERA TIMUR',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN PULAU MOROTAI',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KABUPATEN PULAU TALIABU',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KOTA TERNATE',
                'status' => 'active'
            ],
            [
                'province_id' => 32,
                'name' => 'KOTA TIDORE KEPULAUAN',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN FAKFAK',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN KAIMANA',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN TELUK WONDAMA',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN TELUK BINTUNI',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN MANOKWARI',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN SORONG SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN SORONG',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN RAJA AMPAT',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN TAMBRAUW',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN MAYBRAT',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN MANOKWARI SELATAN',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'status' => 'active'
            ],
            [
                'province_id' => 33,
                'name' => 'KOTA SORONG',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MERAUKE',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN JAYAWIJAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN JAYAPURA',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN NABIRE',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN KEPULAUAN YAPEN',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN BIAK NUMFOR',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PANIAI',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PUNCAK JAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MIMIKA',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN BOVEN DIGOEL',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MAPPI',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN ASMAT',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN YAHUKIMO',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN TOLIKARA',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN SARMI',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN KEEROM',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN WAROPEN',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN SUPIORI',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MAMBERAMO RAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN NDUGA',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN LANNY JAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN MAMBERAMO TENGAH',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN YALIMO',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN PUNCAK',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN DOGIYAI',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN INTAN JAYA',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KABUPATEN DEIYAI',
                'status' => 'active'
            ],
            [
                'province_id' => 34,
                'name' => 'KOTA JAYAPURA',
                'status' => 'active'
            ]
        ];
        
        City::insert($data);
    }
}
