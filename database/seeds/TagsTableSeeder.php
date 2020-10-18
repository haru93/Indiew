<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('tags')->insert([
            'name' => '自然',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2
        DB::table('tags')->insert([
            'name' => '癒し',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3
        DB::table('tags')->insert([
            'name' => '造形美',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4
        DB::table('tags')->insert([
            'name' => '幻想的',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
