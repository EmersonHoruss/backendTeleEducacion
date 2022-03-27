<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Docente')->insert(
            [
                [
                    'Nombre' => 'GILMER',
                    'ApellidoPaterno' => 'ALARCÓN',
                    'ApellidoMaterno' => 'REQUEJO',
                    'Celular' => '947450909',
                    'Whatsapp' => '947450909',
                    'CorreoPersonal' => 'agilmer@hotmail.com',
                    'CorreoInstitucional' => 'galarconr@unprg.edu.pe',
                    'Grado' => 'D',
                ],
                [
                    'Nombre' => 'EDGARDO',
                    'ApellidoPaterno' => 'RODRÍGUEZ',
                    'ApellidoMaterno' => 'GÓMEZ',
                    'Celular' => '942708556',
                    'Whatsapp' => '942708556',
                    'CorreoPersonal' => 'erodriguez@trust-cm.net',
                    'CorreoInstitucional' => 'edrodriguez@unprg.edu.pe',
                    'Grado' => 'D',
                ],
                [
                    'Nombre' => 'VICTOR ALBERTO MARTIN',
                    'ApellidoPaterno' => 'BURGOS',
                    'ApellidoMaterno' => 'MARIÑOS',
                    'Celular' => '976396240',
                    'Whatsapp' => '976396240',
                    'CorreoPersonal' => 'vburgosm@hotmail.com',
                    'CorreoInstitucional' => 'vaburgosm@unprg.edu.pe',
                    'Grado' => 'D',
                ],
                [
                    'Nombre' => 'JUAN',
                    'ApellidoPaterno' => 'ZAPATA',
                    'ApellidoMaterno' => 'SANDOVAL',
                    'Celular' => '942490183',
                    'Whatsapp' => '942490183',
                    'CorreoPersonal' => null,
                    'CorreoInstitucional' => 'jzapata@unprg,edu.pe',
                    'Grado' => 'M',
                ],
                [
                    'Nombre' => 'CARLOS HUGO',
                    'ApellidoPaterno' => 'LUNA',
                    'ApellidoMaterno' => 'RIOJA',
                    'Celular' => '979565612',
                    'Whatsapp' => '979565612',
                    'CorreoPersonal' => 'docarlun23@gmail.com',
                    'CorreoInstitucional' => 'docarlun@unprg.edu.pe',
                    'Grado' => 'D',
                ],

            ]
        );
    }
}
