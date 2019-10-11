<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Noticia;
use Faker\Generator as Faker;

$factory->define(App\Models\Noticia::class, function (Faker $faker) {
    return [
        'titulo' => $faker->catchPhrase,
        'contenido' => $faker->text($maxNbChars = 200)
    ];
});
