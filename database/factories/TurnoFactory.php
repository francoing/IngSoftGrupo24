<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Turno;
use Faker\Generator as Faker;

$factory->define(Turno::class, function (Faker $faker) {

    return [
        'horaInicioTurno' => $faker->word,
        'horaFinTurno' => $faker->word,
        'descripcion' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
