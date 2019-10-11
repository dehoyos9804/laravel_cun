<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Publicacion;
use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(App\Models\Publicacion::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->company,
        'usuario_id'=>function(){
            return factory(App\Models\Usuario::class)->create()->id;
        }
    ];
});
