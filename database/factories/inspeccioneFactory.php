<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\inspeccione;
use Faker\Generator as Faker;

$factory->define(inspeccione::class, function (Faker $faker) {

    return [
        'supervisor_id' => $faker->randomDigitNotNull,
        'linea_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
