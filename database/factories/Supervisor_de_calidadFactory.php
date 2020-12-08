<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Supervisor_de_calidad;
use Faker\Generator as Faker;

$factory->define(Supervisor_de_calidad::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'turno_id' => $faker->randomDigitNotNull,
        'op_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
