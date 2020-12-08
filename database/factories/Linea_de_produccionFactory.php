<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Linea_de_produccion;
use Faker\Generator as Faker;

$factory->define(Linea_de_produccion::class, function (Faker $faker) {

    return [
        'codigoLinea_de_produccion' => $faker->word,
        'modelo_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
