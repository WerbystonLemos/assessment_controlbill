<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'      => "Admin",
                'email'     => "admin@email.com",
                'level'     => "admin",
                'password'  => '$2y$12$Em41e9iNe6a1uXF0WrIO.e5tXMBkYj.PaOaIfZzh9kcqBpq2ZQj3a',
            ],
            [
                'name'      => "User",
                'email'     => "user@email.com",
                'level'     => "user",
                'password'  => '$2y$12$QRxkFB63/92aksF.eMzyeOZ93Zag1LR9B4f/3g4oDI.MJHQURiZEy',
            ]
        ]);
    }
}
