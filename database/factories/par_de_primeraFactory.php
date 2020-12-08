<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\par_de_primera;
use Faker\Generator as Faker;

$factory->define(par_de_primera::class, function (Faker $faker) {

    return [
        'primera' => $faker->randomDigitNotNull,
        'supervisor_id' => $faker->randomDigitNotNull,
        'linea_id' => $faker->word,
        'op_id' => $faker->word,
        'modelo_id' => $faker->word,
        'color_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
