<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Laboratorio;
use Faker\Generator as Faker;

$factory->define(App\Models\Laboratorio::class, function (Faker $faker) {
    return [
        'razonsocial'=>$faker->company,
        'direccion'=>$faker->country,
        'telefonos'=>$faker->phoneNumber,
    ];
});
