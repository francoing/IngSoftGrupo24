<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Par_de_segunda;
use Faker\Generator as Faker;

$factory->define(Par_de_segunda::class, function (Faker $faker) {

    return [
        'totalSegunda	integer' => $faker->word,
        'linea_id' => $faker->randomDigitNotNull,
        'supervisor_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
