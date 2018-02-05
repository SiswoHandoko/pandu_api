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
            	'user_id' => 1,
            	'title' => 'Info Pembayaran',
                'description' => 'Anda belum melakukan pembayaran, segera melakukan pembaran dalam waktu 1 menit.',
                'status' => 'active',
            	'created_by' => 1
            ]
        ];

        Message::insert($data);
    }
}
