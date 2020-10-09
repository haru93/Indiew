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
        ]);

        DB::table('games')->insert([
            'name' => 'ABZÛ (アブズ)',
            'data' => '水中の中に広がる世界は幻想的で、スキューバダイビングをしているかのような気分が味わえます。癒される作品です。',
            'image' => 'abzu_games.jpg',
        ]);

        DB::table('games')->insert([
            'name' => 'Untitled Goose Game 〜いたずらガチョウがやって来た！〜',
            'data' => 'ガチョウを操作していたずらの限りを尽くす作品。このゲーム、パステルカラーで色鮮やかに描かれており、癒されます。',
            'image' => 'UntitledGoose_games.jpg',
        ]);
    }
}
