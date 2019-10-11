<?php

use Illuminate\Database\Seeder;
use App\Models\Pelicula;

class PeliculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Pelicula::class, 10)->create();
    }
}
