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
        // 1
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 2,
            'title' => '海の仲間達と併走',
            'body' => '迫力満点です。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/abzu-image2_articles_202010181919.jpg',
            'created_at' => date('2020-08-27 12:00:00'),
            'updated_at' => date('2020-08-27 12:00:00'),
        ]);

        // 2
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 1,
            'title' => '幻想的な色合い',
            'body' => 'ストーリーが気になります。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/hollowknight_image1_articles_202010190038.jpg',
            'created_at' => date('2020-08-28 12:00:00'),
            'updated_at' => date('2020-08-28 12:00:00'),
        ]);

        // 3
        DB::table('articles')->insert([
            'user_id' => 2,
            'game_id' => 1,
            'title' => '戦闘シーン',
            'body' => 'ボス戦でのワンシーンです。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/hollowknight_image2_articles_202010190039.jpg',
            'created_at' => date('2020-08-29 12:00:00'),
            'updated_at' => date('2020-08-29 12:00:00'),
        ]);

        // 4
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 3,
            'title' => '伝わる緊張感',
            'body' => '緊張感があります。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/untitledgoose_image1_articles_202010190039.jpg',
            'created_at' => date('2020-10-01 12:00:00'),
            'updated_at' => date('2020-10-01 12:00:00'),
        ]);

        // 5
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 4,
            'title' => '雪山を超え',
            'body' => '雪景色広がります。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/air-missions-hind_image1_202010190050.jpg',
            'created_at' => date('2020-10-02 12:00:00'),
            'updated_at' => date('2020-10-02 12:00:00'),
        ]);

        // 6
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 5,
            'title' => '奇妙な家',
            'body' => '住む家からすでに奇妙さが伝わってきます。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/edith-finch_image1_202010190105.jpg',
            'created_at' => date('2020-10-03 12:00:00'),
            'updated_at' => date('2020-10-03 12:00:00'),
        ]);

        // 7
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 6,
            'title' => '神秘的',
            'body' => 'ニブルの森での一コマ。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/ori_image1_202010190113.jpg',
            'created_at' => date('2020-10-04 12:00:00'),
            'updated_at' => date('2020-10-04 12:00:00'),
        ]);

        // 8
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 6,
            'title' => '光差し込む',
            'body' => '頑張る姿に光が照らします。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/ori_image2_202010190115.jpg',
            'created_at' => date('2020-10-05 12:00:00'),
            'updated_at' => date('2020-10-05 12:00:00'),
        ]);

        // 9
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 7,
            'title' => '狐と青',
            'body' => 'グラフィックがきれいです。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/split-of-the-north_image1_202010190137.jpg',
            'created_at' => date('2020-10-06 12:00:00'),
            'updated_at' => date('2020-10-06 12:00:00'),
        ]);

        // 10
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 8,
            'title' => 'ジャンプ！',
            'body' => '尾根を抜けて飛ぶ。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/lonely-mountains-downhill_image1_202010190147.jpg',
            'created_at' => date('2020-10-07 12:00:00'),
            'updated_at' => date('2020-10-07 12:00:00'),
        ]);

        // 11
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 9,
            'title' => '子供部屋',
            'body' => 'おもちゃの中を走る、独特な感覚です。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/supertoycars_image1_202010190201.jpg',
            'created_at' => date('2020-10-08 12:00:00'),
            'updated_at' => date('2020-10-08 12:00:00'),
        ]);

        // 12
        DB::table('articles')->insert([
            'user_id' => 2,
            'game_id' => 2,
            'title' => '瞑想中',
            'body' => '瞑想ポイントでの一コマ。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/abzu-image3_articles_202010181914.jpg',
            'created_at' => date('2020-10-12 12:00:00'),
            'updated_at' => date('2020-10-12 12:00:00'),
        ]);

        // 13
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 11,
            'title' => '強制遠近法',
            'body' => 'とにかく不思議な感覚でした。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/superliminal_image1_202010190213.jpg',
            'created_at' => date('2020-10-13 12:00:00'),
            'updated_at' => date('2020-10-13 12:00:00'),
        ]);

        // 14
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 10,
            'title' => '高低差',
            'body' => '颯爽と雪山を駆ける！',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/snowboarding-the-next-phase_image1_202010190208.jpg',
            'created_at' => date('2020-10-14 12:00:00'),
            'updated_at' => date('2020-10-14 12:00:00'),
        ]);

        // 15
        DB::table('articles')->insert([
            'user_id' => 2,
            'game_id' => 9,
            'title' => 'おもちゃ？',
            'body' => 'ミニカーのスナップショット',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/supertoycars_image2_202010190155.jpg',
            'created_at' => date('2020-10-15 12:00:00'),
            'updated_at' => date('2020-10-15 12:00:00'),
        ]);

        // 16
        DB::table('articles')->insert([
            'user_id' => 2,
            'game_id' => 6,
            'title' => '木々の中',
            'body' => '神秘的に輝きます。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/ori_image3_202010190117.jpg',
            'created_at' => date('2020-10-16 12:00:00'),
            'updated_at' => date('2020-10-16 12:00:00'),
        ]);

        // 17
        DB::table('articles')->insert([
            'user_id' => 2,
            'game_id' => 7,
            'title' => '雪景色',
            'body' => '北欧の雪',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/split-of-the-north_image2_202010190137.jpg',
            'created_at' => date('2020-10-17 12:00:00'),
            'updated_at' => date('2020-10-17 12:00:00'),
        ]);

        // 18
        DB::table('articles')->insert([
            'user_id' => 2,
            'game_id' => 8,
            'title' => '様々な山',
            'body' => '赤土で覆われた山など複数のフィールドがあります。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/lonely-mountains-downhill_image2_202010190148.jpg',
            'created_at' => date('2020-10-18 12:00:00'),
            'updated_at' => date('2020-10-18 12:00:00'),
        ]);

        // 19
        DB::table('articles')->insert([
            'user_id' => 1,
            'game_id' => 2,
            'title' => '海底から見上げて',
            'body' => '圧巻です。',
            'image' => 'https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/abzu-image1_articles_202010181918.jpg',
            'created_at' => date('2020-10-19 12:00:00'),
            'updated_at' => date('2020-10-19 12:00:00'),
        ]);
    }
}
