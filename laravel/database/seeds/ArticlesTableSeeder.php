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
            'game_id' => 2,
            'title' => '海底から見上げて',
            'body' => '圧巻です。',
            'image' => 'abzu_articles.jpg',
            'created_at' => date('2020-08-26 12:00:00'),
            'updated_at' => date('2020-08-26 12:00:00'),
        ]);

        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 2,
            'title' => '海の仲間達と併走',
            'body' => '迫力満点です。',
            'image' => 'abzu_articles2.jpg',
            'created_at' => date('2020-08-27 12:00:00'),
            'updated_at' => date('2020-08-27 12:00:00'),
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'game_id' => 1,
            'title' => '幻想的な色合い',
            'body' => 'ストーリーが気になります。',
            'image' => 'HollowKnight_articles.jpg',
            'created_at' => date('2020-08-28 12:00:00'),
            'updated_at' => date('2020-08-28 12:00:00'),
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'game_id' => 3,
            'title' => '色合いとは裏腹に',
            'body' => '緊張感があります。',
            'image' => 'UntitledGoose_articles.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
