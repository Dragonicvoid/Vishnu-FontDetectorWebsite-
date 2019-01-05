<?php

use Illuminate\Database\Seeder;

class UploadedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Uploaded::insert([
            'id_transaction' => 1,
            'id_user' => '1',
            'alamat_gambar' => 'Bambang-1-1.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

        \App\Uploaded::insert([
            'id_transaction' => 2,
            'id_user' => '1',
            'alamat_gambar' => 'Bambang-1-2.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

        \App\Uploaded::insert([
            'id_transaction' => 3,
            'id_user' => '3',
            'alamat_gambar' => 'Tery-3-1.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

        \App\Uploaded::insert([
            'id_transaction' => 4,
            'id_user' => '2',
            'alamat_gambar' => 'Susi-2-1.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

        \App\Uploaded::insert([
            'id_transaction' => 5,
            'id_user' => '3',
            'alamat_gambar' => 'Tery-3-2.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

        \App\Uploaded::insert([
            'id_transaction' => 6,
            'id_user' => '2',
            'alamat_gambar' => 'Susi-2-2.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

        \App\Uploaded::insert([
            'id_transaction' => 7,
            'id_user' => '2',
            'alamat_gambar' => 'Susi-2-3.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

        \App\Uploaded::insert([
            'id_transaction' => 8,
            'id_user' => '3',
            'alamat_gambar' => 'Tery-3-3.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

        \App\Uploaded::insert([
            'id_transaction' => 9,
            'id_user' => '3',
            'alamat_gambar' => 'Tery-3-4.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

        \App\Uploaded::insert([
            'id_transaction' => 10,
            'id_user' => '2',
            'alamat_gambar' => 'Susi-2-4.jpg',
            'hasil_scan' => 'dummy_data'
        ]);

    }
}
