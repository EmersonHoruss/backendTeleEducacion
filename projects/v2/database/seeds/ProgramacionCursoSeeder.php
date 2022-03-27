<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramacionCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ProgramacionCurso')->insert(
            [
                [
                    "FechaRegistro" => "2021-11-25 11:10:00",
                    "FechaInicio" => "2021-11-27",
                    "FechaFin" => "2021-12-19",
                    "LinkInstitucional" => "https://meet.google.com/vrx-dvat-ibh",
                    "LinkNoInstitucional" => "",
                    "Dirigido" => false,
                    "Atrasado" => false,
                    "CodigoDocente" => 5,
                    "CodigoCoordinador" => 4,
                    "CodigoPrograma" => 6,
                    "CodigoCurso" => 16,
                    "CodigoPersonal" => 1,
                ],
                [
                    "FechaRegistro" => "2022-2-1 15:30:00",
                    "FechaInicio" => "2022-2-2",
                    "FechaFin" => "2022-3-11",
                    "LinkInstitucional" => "https://meet.google.com/nuo-uvah-uhn",
                    "LinkNoInstitucional" => "",
                    "Dirigido" => false,
                    "Atrasado" => false,
                    "CodigoDocente" => 2,
                    "CodigoCoordinador" => 1,
                    "CodigoPrograma" => 62,
                    "CodigoCurso" => 27,
                    "CodigoPersonal" => 5,
                ],
            ]
        );
    }
}
