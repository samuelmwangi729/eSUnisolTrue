<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\results;
use Faker\Generator as Faker;

$factory->define(results::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
