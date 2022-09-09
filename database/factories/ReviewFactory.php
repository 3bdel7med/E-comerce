<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Review;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'review' => $faker->paragraph,
        'rating' => $faker->numberBetween(0, 5),
        'user_id' => function() {
            return User::all()->random();
        },
    ];
});
