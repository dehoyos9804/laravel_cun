<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pais;
use Faker\Generator as Faker;

$factory->define(App\Models\Pais::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->company
    ];
});
