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
            'data' => '各ステージの色合いがきれいで登場するキャラクターも可愛らしい。難易度高めな横型アクションゲーム。',
            'image' => '',
        ]);

        DB::table('games')->insert([
            'name' => 'ABZÛ (アブズ)',
            'data' => '水中の景色が素晴らしく幻想的。癒される作品。',
            'image' => '',
        ]);
    }
}
