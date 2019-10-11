<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Materia;
use Faker\Generator as Faker;

$factory->define(App\Models\Materia::class, function (Faker $faker) {
    return [
        'nombre' =>$faker->company
    ];
});
