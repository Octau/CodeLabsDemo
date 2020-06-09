<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stories;
use Faker\Generator as Faker;

$factory->define(Story::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'due_date' => $faker->date('Y-m-d'),
        'story_points' => $faker->randomElement([0,1,2,3,4,5]),
        'story_type' => $faker->randomElement(['bug', 'tear', 'enhance']),
        'user_id' => 1,
        'epic_id' => 1,

    ];
});
