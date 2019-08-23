<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Examen;
use App\Models\Estudiante;
use Faker\Generator as Faker;

$factory->define(App\Models\Examen::class, function (Faker $faker) {
    return [
        'preguntas' => $faker->paragraph,
        'materia'=> $faker->company,
        'profesor' => $faker->firstNameFemale,
        'estudiante_id' => function(){
        	return factory(App\Models\Estudiante::class)->create()->id;
        }
    ];
});
