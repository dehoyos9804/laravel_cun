<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Genero;
use Faker\Generator as Faker;

$factory->define(App\Models\Genero::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company
    ];
});
