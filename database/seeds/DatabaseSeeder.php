<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(LaboratorioSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(MedicamentoSeeder::class);
        $this->call(GeneroTableSeeder::class);
        $this->call(ModuloTableSeeder::class);
        $this->call(PacienteTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(PeliculaTableSeeder::class);
        $this->call(NoticiaTableSeeder::class);
    }
}
