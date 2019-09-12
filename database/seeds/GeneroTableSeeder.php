<?php

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = factory(App\Models\Genero::class, 5)
        ->create()
        ->each(function($gen){
            $gen->musicas()->save(factory(App\Models\Musica::class)->make());
        });
    }
}
