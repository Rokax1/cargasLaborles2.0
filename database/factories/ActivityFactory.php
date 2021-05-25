<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->text,
        'initial_date' => $faker->date(),
        'final_date' => $faker->date(),
        'category_id' => factory(\App\Models\Category::class),
        'owner_id' => factory(\App\Models\User::class),
        'status_id' => factory(\App\Models\Status::class),
    ];
});
