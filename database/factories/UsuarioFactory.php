<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuario;
use App\Models\Pais;
use Faker\Generator as Faker;

$factory->define(App\Models\Usuario::class, function (Faker $faker) {
    return [
        'nombres'=>$faker->firstName,
        'apellidos'=>$faker->lastName,
        'pais_id'=> function(){
            return factory(App\Models\Pais::class)->create()->id;
        }
    ];
});
