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
            'email' => 'Bambang@yahoo.co.id',
        ]);
    }
}
