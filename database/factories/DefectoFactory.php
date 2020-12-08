<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Defecto;
use Faker\Generator as Faker;

$factory->define(Defecto::class, function (Faker $faker) {

    return [
        'nombreDefecto' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
