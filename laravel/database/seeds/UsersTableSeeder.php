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
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@user.com',
            'password' => Hash::make('password'),
        ]);
    }
}
