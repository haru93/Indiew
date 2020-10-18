<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('categories')->insert([
            'name' => 'シミュレーション',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2
        DB::table('categories')->insert([
            'name' => 'アドベンチャー',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3
        DB::table('categories')->insert([
            'name' => 'アクション',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4
        DB::table('categories')->insert([
            'name' => 'レース',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 5
        DB::table('categories')->insert([
            'name' => 'シューティング',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 6
        DB::table('categories')->insert([
            'name' => 'スポーツ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
