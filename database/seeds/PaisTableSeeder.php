<?php

use Illuminate\Database\Seeder;

use App\Models\Pais;
use App\Models\Usuario;
use App\Models\Publicacion;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pais = factory(App\Models\Pais::class, 10)
        ->create()
        ->each(function($pais){
            $usuario = factory(App\Models\Usuario::class)->make();
            $pais->usuarios()->save($usuario);
            $usuario->publicaciones()->save(factory(App\Models\Publicacion::class)->make());
        });
    }
}
