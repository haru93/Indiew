<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(CategoryGameTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ArticleTagTableSeeder::class);
    }
}
