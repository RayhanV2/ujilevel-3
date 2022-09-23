<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
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
                'username' => '123',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('admin'),
            ],
            [
                'username' => '111',
                'name' => 'Faraz',
                'email' => 'faraz@gmail.com',
                'level' => 'user',
                'password' => bcrypt('Faraz Yanuar'),
            ],
            [
                'username' => '222',
                'name' => 'Rayhan',
                'email' => 'rayhan@gmail.com',
                'level' => 'user',
                'password' => bcrypt('Rayhan Sulthan'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
