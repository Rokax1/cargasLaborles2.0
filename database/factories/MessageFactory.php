<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraphs(3, true),
        'activity_id' => factory(\App\Models\Activity::class),
        'user_id' => factory(\App\Models\User::class),
    ];
});
