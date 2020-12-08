<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\par_hermanado;
use Faker\Generator as Faker;

$factory->define(par_hermanado::class, function (Faker $faker) {

    return [
        'hermanado' => $faker->randomDigitNotNull,
        'supervisor_id' => $faker->randomDigitNotNull,
        'linea_id' => $faker->randomDigitNotNull,
        'op_id' => $faker->randomDigitNotNull,
        'modelo_id' => $faker->randomDigitNotNull,
        'color_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
