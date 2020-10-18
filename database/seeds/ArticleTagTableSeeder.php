<?php

use Illuminate\Database\Seeder;

class ArticleTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_tag')->insert([
            'article_id' => 1,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 1,
            'tag_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 2,
            'tag_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 4,
            'tag_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 5,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 6,
            'tag_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 6,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 7,
            'tag_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 8,
            'tag_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 9,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 9,
            'tag_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 2,
            'tag_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 10,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 11,
            'tag_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 12,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 12,
            'tag_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 13,
            'tag_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 14,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 15,
            'tag_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 16,
            'tag_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 16,
            'tag_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 17,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 17,
            'tag_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 18,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 18,
            'tag_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 19,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => 19,
            'tag_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
