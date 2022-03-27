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
        // PROGRAMACIÓN CURSO
        $this->call(FacultadSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(ProgramaSeeder::class);
        $this->call(CurriculaSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(ProgramacionCursoSeeder::class);
        $this->call(ProgramacionSesionSeeder::class);
        // $this->call(SesionGuardadaSeeder::class);
        // $this->call(MotivoReprogramacionSesionSeeder::class);

        // PROGRAMACIÓN EXAMEN

        // PROGRAMACIÓN SUSTENTACIÓN

        // USUARIO
        $this->call(UsuarioSeeder::class);
        $this->call(PerfilSeeder::class);
    }
}
