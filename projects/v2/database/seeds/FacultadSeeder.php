<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Facultad')->insert(
            [
                [
                    "Nombre" => "Facultad de Ciencias Biológicas",
                    "Siglas" => "FACB",
                ],
                [
                    "Nombre" => "Facultad de Ciencias Económicas, Administrativas y Contables",
                    "Siglas" => "FACEAC",
                ],
                [
                    "Nombre" => "Facultad de Ciencias Físicas y Matemáticas",
                    "Siglas" => "FACFYM",
                ],
                [
                    "Nombre" => "Facultad de Ciencias Histórico Sociales y Educación",
                    "Siglas" => "FACHSE",
                ],
                [
                    "Nombre" => "Facultad de Derecho y Ciencias Políticas",
                    "Siglas" => "FADCP",
                ],
                [
                    "Nombre" => "Facultad de Enfermería",
                    "Siglas" => "FE",
                ],
                [
                    "Nombre" => "Facultad de Ingeniería Zootecnia",
                    "Siglas" => "FIZ",
                ],
                [
                    "Nombre" => "Facultad de Ingeniería Mecánica y Eléctrica",
                    "Siglas" => "FIME",
                ],
                [
                    "Nombre" => "Facultad de Ingeniería Agrícola",
                    "Siglas" => "FIA",
                ],
                [
                    "Nombre" => "Facultad de Ingeniería Civil, Sistemas y Arquitectura",
                    "Siglas" => "FICSA",
                ],
                [
                    "Nombre" => "Facultad de Ingeniería Química e Industrias Alimentarias",
                    "Siglas" => "FIQIA",
                ],
                [
                    "Nombre" => "Facultad de Medicina Humana",
                    "Siglas" => "FMH",
                ],
            ]
        );
    }
}
