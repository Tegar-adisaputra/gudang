<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Adiministrator',
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'admin@gmail.com',

            ],
            [
                'name' => 'Tegar Adisaputra',
                'username' => 'tegaradi',
                'password' => bcrypt('123123'),
                'level' => 2,
                'email' => 'tegara25@gmail.com',

            ],
            [
                'name' => 'Adisaputra',
                'username' => 'adi',
                'password' => bcrypt('12345'),
                'level' => 3,
                'email' => 'adi@gmail.com',

            ],
        ];
        foreach($user as $key => $value){
            User ::create($value);
        }
    }
}
