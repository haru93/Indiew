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
        // 1
        DB::table('games')->insert([
            'name' => 'Hollow Knight (ホロウナイト）',
            'data' => '可愛らしいムシ達の王国の物語。色鮮やかな背景に魅せられる作品です。難易度は中々高めな横型アクションゲームです。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/hollowknight_games_202010170618.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000003209.html',
            'price' => 1480,
            'released_date' => '2018-06-13',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2
        DB::table('games')->insert([
            'name' => 'ABZÛ (アブズ)',
            'data' => '水中の中に広がる世界は幻想的で、スキューバダイビングをしているかのような気分が味わえます。癒される作品です。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/abzu_games_202010170617.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000021659.html',
            'price' => 2468,
            'released_date' => '2020-02-27',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3
        DB::table('games')->insert([
            'name' => 'Untitled Goose Game 〜いたずらガチョウがやって来た！〜',
            'data' => 'ガチョウを操作していたずらの限りを尽くす作品。このゲーム、パステルカラーで色鮮やかに描かれており、癒されます。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/untitledgoose_games_202010180130.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000014142.html',
            'price' => 1980,
            'released_date' => '2019-09-20',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4
        DB::table('games')->insert([
            'name' => 'Air Missions: HIND',
            'data' => '本格的なヘリコプター操作を体験できるシューティングゲーム。大海原や山々を悠然と滑空します。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/air-missions-hind_games_202010170636.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000029383.html',
            'price' => 2750,
            'released_date' => '2020-07-30',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 5
        DB::table('games')->insert([
            'name' => 'What Remains of Edith Finch 『フィンチ家の奇妙な屋敷でおきたこと』',
            'data' => 'ワシントン州のとある一族に関する奇妙な物語集。屋敷の調度品が細部まで丁寧に作り込まれており、臨場感ある１人称視点の作品です。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/edith-finch_games_202010170626.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000019334.html',
            'price' => 2200,
            'released_date' => '2019-07-04',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 6
        DB::table('games')->insert([
            'name' => 'Ori and the Blind Forest: Definitive Edition',
            'data' => '滅びの一途を辿るニブルの森を救うため闇の根源に立ち向かう。グラフィックが美しく幻想的でゲーム性も素晴らしい作品です。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/ori_games_202010170613.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000018711.html',
            'price' => 2052,
            'released_date' => '2019-09-28',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 7
        DB::table('games')->insert([
            'name' => 'きたのたましい',
            'data' => 'この物語は、北欧の言い伝えにある様々な話を基にしています。アイスランドの風景にインスパイアされた雪景色広がる中を赤狐が駆けます。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/split-of-the-north_games_202010170559.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000032458.html',
            'price' => 2570,
            'released_date' => '2020-07-22',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 8
        DB::table('games')->insert([
            'name' => 'Lonely Mountains: Downhill',
            'data' => '手付かずの山がみせる美しい自然の中を自転車で駆け降ります。隠された休憩所や秘密の抜け道があったりと心休まるライドが楽しめます。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/lonely-mountains-downhill_games_202010170624.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000019472.html',
            'price' => 2200,
            'released_date' => '2020-05-07',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 9
        DB::table('games')->insert([
            'name' => 'Super Toy Cars',
            'data' => 'おもちゃ敷きめく子供部屋を選んだミニカーで走るカーレース。４人まで同時対戦プレイが可能で家族や友達と気軽に楽しめます。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/supertoycars_games_202010170631.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000010306.html',
            'price' => 800,
            'released_date' => '2018-06-21',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 10
        DB::table('games')->insert([
            'name' => 'Snowboarding The Next Phase',
            'data' => 'Nintendo Switchに初めて登場したスノーボードゲーム。世界各地の雪山をアクロバティックに駆け降ります。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/snowboarding-the-next-phase_games_202010170632.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000014089.html',
            'price' => 1090,
            'released_date' => '2019-01-10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 11
        DB::table('games')->insert([
            'name' => 'Superliminal',
            'data' => '強制遠近法などの錯視を利用した一人称視点のパズルゲームです。柔軟な発想が求められる不思議な感覚が味わえるゲーム。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/superliminal_games_202010170630.jpg',
            'url' => 'https://store-jp.nintendo.com/list/software/70010000028674.html',
            'price' => 2050,
            'released_date' => '2020-07-07',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
