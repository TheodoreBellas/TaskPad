<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TaskLog;
use Faker\Generator as Faker;

$factory->define(TaskLog::class, function (Faker $faker) {
    return [
        'duration_minutes'  => $faker->numberBetween(1, 360)
    ];
});
