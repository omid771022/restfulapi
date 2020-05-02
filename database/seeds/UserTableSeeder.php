<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user1',
            'email' => 'user1@webamooz.net',
            'password' => bcrypt('password'),
             'token'=>'dfgdgdfgdfagadfgertgerhragsfsdrtwet',
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'user2@webamooz.net',
            'password' => bcrypt('password'),
        'token'=>'sadfsadfadfgadfgfgadfgadfgadfg',
        ]);
    }
}
