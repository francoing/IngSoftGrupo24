<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\revision;
use Faker\Generator as Faker;

$factory->define(revision::class, function (Faker $faker) {

    return [
        'pie' => $faker->word,
        'defecto_id' => $faker->randomDigitNotNull,
        'supervisor_id' => $faker->randomDigitNotNull,
        'linea_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
