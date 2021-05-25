<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\File;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    return [
        'path' => $faker->text,
        'activity_id' => factory(\App\Models\Activity::class),
    ];
});
