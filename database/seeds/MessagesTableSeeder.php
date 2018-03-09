<?php

use App\Model\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->truncate();

        $data = [
            [
            	'user_id' => 3,
            	'title' => 'Info Pembayaran 1',
                'description' => 'Anda belum melakukan pembayaran, segera melakukan pembaran dalam waktu 1 menit.',
                'status' => 'active',
            	'created_by' => 1
            ],
            [
            	'user_id' => 4,
            	'title' => 'Info Pembayaran 2',
                'description' => 'Anda belum melakukan pembayaran, segera melakukan pembaran dalam waktu 1 menit.',
                'status' => 'active',
            	'created_by' => 1
            ],
            [
            	'user_id' => 5,
            	'title' => 'Info Pembayaran 3',
                'description' => 'Anda belum melakukan pembayaran, segera melakukan pembaran dalam waktu 1 menit.',
                'status' => 'active',
            	'created_by' => 1
            ],
            [
            	'user_id' => 4,
            	'title' => 'Info Pembayaran 4',
                'description' => 'Anda belum melakukan pembayaran, segera melakukan pembaran dalam waktu 1 menit.',
                'status' => 'active',
            	'created_by' => 1
            ],
            [
            	'user_id' => 6,
            	'title' => 'Info Pembayaran 5',
                'description' => 'Anda belum melakukan pembayaran, segera melakukan pembaran dalam waktu 1 menit.',
                'status' => 'active',
            	'created_by' => 1
            ]
        ];

        Message::insert($data);
    }
}
