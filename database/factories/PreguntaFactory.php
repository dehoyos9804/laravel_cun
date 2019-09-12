<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pregunta;
use App\Models\Modulo;
use Faker\Generator as Faker;

$factory->define(App\Models\Pregunta::class, function (Faker $faker) {
    return [
        'pregunta'=>$faker->company,
        'opciones_respuesta'=>$faker->creditCardDetails,
        'modulo_id'=> function(){
            return factory(App\Models\Modulo::class)->create()->id;
        }
    ];
});
