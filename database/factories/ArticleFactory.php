<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use App\Models\User;
use App\Models\Game;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(10),
        'body' => $faker->text(50),
        'image' => $faker->image,
        'user_id' => function () {
            return factory(User::class);
        },
        'game_id' => function () {
            return factory(Game::class);
        }
    ];
});
