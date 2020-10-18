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
        // 1
        DB::table('users')->insert([
            'name' => 'テストユーザー',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
        ]);

        // 2
        DB::table('users')->insert([
            'name' => 'ハルキ',
            'email' => 'haruki@haruki.com',
            'password' => Hash::make('password'),
        ]);
    }
}
