<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 

class UserSeeder extends Seeder
{
        /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
        [
            'name'=>'Atmin',
            'username'=>'admin',
            'role'=>'admin',
            'password'=>bcrypt('12345678')
        ],

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}

