<?php

use Illuminate\Database\Seeder;

class MedicamentoSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::insert("INSERT INTO medicamentos (nombre, farmacologia, formafarmaceutica) VALUES 
        	('Acetaminofen', 'La farmacología ​ es la ciencia que estudia la historia, el origenn', 'tabletas'),
        	('Ibuprofeno', 'La farmacología ​ es la ciencia que estudia la historia, el origenn', 'tabletas'),
        	('Dolex', 'La farmacología ​ es la ciencia que estudia la historia, el origenn', 'tabletas')");
    }
}
