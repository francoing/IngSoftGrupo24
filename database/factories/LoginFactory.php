<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Login;
use Faker\Generator as Faker;

$factory->define(Login::class, function (Faker $faker) {

    return [
        'nombre_completo' => $faker->word,
        'correo' => $faker->word,
        'contrasena' => $faker->word,
        'token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
