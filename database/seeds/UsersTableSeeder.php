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
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@test2.com',
            'password' => Hash::make('password'),
        ]);
    }
}
