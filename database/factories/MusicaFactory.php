<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Genero;
use App\Models\Musica;
use Faker\Generator as Faker;

$factory->define(App\Models\Musica::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'artista' => $faker->firstNameFemale,
        'genero_id' => function(){
        return factory(App\Models\Genero::class)->create()->id;
        }

    ];
});
