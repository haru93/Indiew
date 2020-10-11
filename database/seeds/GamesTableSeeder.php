<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name' => 'Hollow Knight (ホロウナイト）',
            'data' => '可愛らしいムシ達の王国の物語。色鮮やかな背景に魅せられる作品です。難易度は中々高めな横型アクションゲームです。',
            'image' => 'HollowKnight_games.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000003209.html',
            'price' => 1480,
            'category_id' => 3,
            'released_date' => '2018-06-13',
        ]);

        DB::table('games')->insert([
            'name' => 'ABZÛ (アブズ)',
            'data' => '水中の中に広がる世界は幻想的で、スキューバダイビングをしているかのような気分が味わえます。癒される作品です。',
            'image' => 'abzu_games.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000021659.html',
            'price' => 2468,
            'category_id' => 2,
            'released_date' => '2020-02-27',
        ]);

        DB::table('games')->insert([
            'name' => 'Untitled Goose Game 〜いたずらガチョウがやって来た！〜',
            'data' => 'ガチョウを操作していたずらの限りを尽くす作品。このゲーム、パステルカラーで色鮮やかに描かれており、癒されます。',
            'image' => 'UntitledGoose_games.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000014142.html',
            'price' => 1980,
            'category_id' => 3,
            'released_date' => '2019-09-20',
        ]);
    }
}
