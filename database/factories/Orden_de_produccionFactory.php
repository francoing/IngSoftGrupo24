<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Orden_de_produccion;
use Faker\Generator as Faker;

$factory->define(Orden_de_produccion::class, function (Faker $faker) {

    return [
        'tiempoInicio' => $faker->word,
        'estado' => $faker->word,
        'linea_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
