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
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/hollowknight_games_202010170618.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000003209.html',
            'price' => 1480,
            'released_date' => '2018-06-13',
        ]);

        DB::table('games')->insert([
            'name' => 'ABZÛ (アブズ)',
            'data' => '水中の中に広がる世界は幻想的で、スキューバダイビングをしているかのような気分が味わえます。癒される作品です。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/abzu_games_202010170617.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000021659.html',
            'price' => 2468,
            'released_date' => '2020-02-27',
        ]);

        DB::table('games')->insert([
            'name' => 'Untitled Goose Game 〜いたずらガチョウがやって来た！〜',
            'data' => 'ガチョウを操作していたずらの限りを尽くす作品。このゲーム、パステルカラーで色鮮やかに描かれており、癒されます。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/untitledgoose_games_202010180130.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000014142.html',
            'price' => 1980,
            'released_date' => '2019-09-20',
        ]);

        DB::table('games')->insert([
            'name' => 'Air Missions: HIND',
            'data' => '本格的なヘリコプター操作を体験できるシューティングゲーム。大海原や山々を悠然と滑空します。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/air-missions-hind_games_202010170636.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000029383.html',
            'price' => 2750,
            'released_date' => '2020-07-30',
        ]);
    }
}
