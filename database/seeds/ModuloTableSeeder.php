<?php

use Illuminate\Database\Seeder;
use App\Models\Pregunta;
use App\Models\Modulo;

class ModuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modulos = factory(App\Models\Modulo::class, 10)
        ->create()
        ->each(function($modulo){
            $modulo->preguntas()->save(factory(App\Models\Pregunta::class)->make());
        });
    }
}
