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

        $data = [
            [
            	'tourism_place_id' => 1,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/1.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 2,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/2.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 3,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/3.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 4,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/4.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 5,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/5.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 6,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/6.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 7,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/7.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 8,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/8.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>9,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/9.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>10,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/10.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>11,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/11.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 12,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/12.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 13,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/13.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 14,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/14.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 15,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/15.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 16,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/16.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 17,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/17.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>18,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/18.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 19,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/19.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 20,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/20.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 21,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/21.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 22,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/22.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 23,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/23.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 24,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/24.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 25,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/25.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 26,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/26.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 27,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/27.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>28,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/28.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 29,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/29.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 30,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/30.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>31,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/31.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 32,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/32.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 33,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/33.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 34,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/34.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 35,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/35.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 36,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/36.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 37,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/37.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 38,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/38.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 39,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/40.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 40,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/40.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 41,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/41.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 42,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/42.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 43,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/43.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 44,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/44.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>45,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/45.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 46,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/46.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 47,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/47.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 48,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/48.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 49,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/49.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 50,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/50.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 51,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/51.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 52,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/52.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 53,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/53.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 54,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/54.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 55,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/55.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 56,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/56.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 57,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/57.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 58,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/58.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>59,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/59.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 60,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/60.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 61,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/61.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 62,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/62.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 63,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/63.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 64,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/64.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 65,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/65.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 66,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/66.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 67,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/67.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 68,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/68.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 69,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/69.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 70,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/70.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 71,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/71.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 72,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/72.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>73,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/73.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 74,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/74.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 75,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/75.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 76,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/76.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 77,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/77.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 78,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/78.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>79,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/79.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 80,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/80.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 81,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/81.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 82,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/82.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 83,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/83.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 84,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/84.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 85,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/85.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 86,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/86.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' =>87,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/87.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 88,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/88.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 89,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/89.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 90,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/90.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 91,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/91.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 92,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/92.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 93,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/93.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 95,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/95.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 95,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/95.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 96,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/96.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 97,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/97.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 98,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/98.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 99,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/99.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 100,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/100.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 101,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/101.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 102,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/102.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 103,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/103.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 104,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/104.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 105,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/105.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 106,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/106.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 107,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/107.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 108,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/108.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 109,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/109.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 110,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/110.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 111,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/111.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 112,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/112.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 113,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/113.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 114,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/114.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 115,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/115.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 116,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/116.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 117,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/117.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 118,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/118.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 119,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/119.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 120,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/120.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 121,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/121.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 122,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/122.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 123,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/123.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 124,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/124.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 125,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/125.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 126,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/126.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 127,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/127.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 128,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/128.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 129,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/129.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 130,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/130.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 131,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/131.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 132,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/132.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 133,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/133.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 134,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/134.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 135,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/135.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 136,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/136.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 137,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/137.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 138,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/138.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 139,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/139.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 140,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/140.png',
            	'status' => 'active'
            ],
            [
            	'tourism_place_id' => 141,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/141.png',
            	'status' => 'active'
			],
			[
            	'tourism_place_id' => 142,
            	'image_url' => 'http://api.dipanduapp.com/public/images/places/142.png',
            	'status' => 'active'
			]

        ];

        Picture::insert($data);
    }
}
