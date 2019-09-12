<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Modulo;
use Faker\Generator as Faker;

$factory->define(App\Models\Modulo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company
    ];
});
