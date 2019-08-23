<?php

use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estudiante = factory(App\Models\Estudiante::class, 5)
        	->create()
        	->each(function($student){
        		$student->examenes()->save(factory(App\Models\Examen::class)->make());
        	});
    }
}
