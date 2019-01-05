<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'id_user' => 1,
            'username' => 'Bambang',
            'password' => 'password',
            'email' => 'Bambang@yahoo.co.id',
            'phone' => '082112483391',
            'gender' => 'male',
            'address' => 'Jalan Rawa Belong no 25',
            'has_upload' => 2,
            'photo' => 'Bambang-1.jpg'
        ]);

        \App\User::insert([
            'id_user' => 2,
            'username' => 'Susi',
            'password' => 'password',
            'email' => 'Susy@yahoo.co.id',
            'phone' => '082112483391',
            'gender' => 'female',
            'address' => 'Jalan Dago no 25a',
            'has_upload' => 4,
            'photo' => 'Susi-2.jpg'
        ]);

        \App\User::insert([
            'id_user' => 3,
            'username' => 'Tery',
            'password' => 'password',
            'email' => 'Tery@yahoo.co.id',
            'phone' => '082112483391',
            'gender' => 'male',
            'address' => 'Jalan Haji Nawi no 25a',
            'has_upload' => 4,
            'photo' => 'Tery-3.jpg'
        ]);


    }
}
