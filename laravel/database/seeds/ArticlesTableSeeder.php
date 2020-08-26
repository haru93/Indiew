<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 1,
            'title' => 'タイトルテスト',
            'body' => '内容テスト',
            'image' => '',
        ]);

        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 2,
            'title' => 'タイトルテスト2',
            'body' => '内容テスト2',
            'image' => '',
        ]);
    }
}
