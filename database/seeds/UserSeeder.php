<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'Admin ',
            'email' => 'admin@codebudy.com',
            'password' => Hash::make('12345'),
            'type' => 'admin',
        ],[
            'name' => 'User 1 ',
            'email' => 'user1@codebudy.com',
            'password' => Hash::make('12345'),
            'type' => 'user',
        ],[
            'name' => 'User 2 ',
            'email' => 'user2@codebudy.com',
            'password' => Hash::make('12345'),
            'type' => 'user',
        ],[
            'name' => 'User 3 ',
            'email' => 'user3@codebudy.com',
            'password' => Hash::make('12345'),
            'type' => 'user',
        ],[
            'name' => 'User 4 ',
            'email' => 'user4@codebudy.com',
            'password' => Hash::make('12345'),
            'type' => 'user',
        ]]);
    }
}
