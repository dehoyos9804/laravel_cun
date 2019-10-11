<?php

use Illuminate\Database\Seeder;
use App\Models\Noticia;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Noticia::class, 10)->create();
    }
}
