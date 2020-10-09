<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'data' => $faker->text(50),
        'image' => $faker->image,
        'url' => $faker->url,
        'price' => $faker->numberBetween($min = 100, $max = 200),
        'category_id' => function () {
            return factory(Category::class);
        },
        'released_date' =>$faker->date('Y-m-d', 'now')
    ];
});
