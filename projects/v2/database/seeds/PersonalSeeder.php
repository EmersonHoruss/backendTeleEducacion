<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Personal')->insert(
            [
                [
                    'Nombre' => 'David Emerson',
                    'ApellidoPaterno' => 'Perales',
                    'ApellidoMaterno' => 'Villanueva',
                    'Celular' => '942696026',
                    'Whatsapp' => '942696026',
                    'CorreoPersonal' => 'peralesvillanuevaemerson@gmail.com',
                    'CorreoInstitucional' => 'dperalesv@unprg.edu.pe',
                    'Tipo' => 'P',
                ],
                [
                    'Nombre' => 'Noely del Pilar',
                    'ApellidoPaterno' => 'Moscol',
                    'ApellidoMaterno' => 'Montestruque',
                    'Celular' => '955677083',
                    'Whatsapp' => '955677083',
                    'CorreoPersonal' => 'noely.monstestruque@gmail.com',
                    'CorreoInstitucional' => 'nmoscol@unprg.edu.pe',
                    'Tipo' => 'P',
                ],
                [
                    'Nombre' => 'Guillermo',
                    'ApellidoPaterno' => 'Matos',
                    'ApellidoMaterno' => 'Ascona',
                    'Celular' => '973636532',
                    'Whatsapp' => '973636532',
                    'CorreoPersonal' => 'matosasconaguillermo@gmail.com',
                    'CorreoInstitucional' => 'smatosas@unprg.edu.pe',
                    'Tipo' => 'A',
                ],
                [
                    'Nombre' => 'Franklin Edinson',
                    'ApellidoPaterno' => 'Terán',
                    'ApellidoMaterno' => 'Santa Cruz',
                    'Celular' => '979101355',
                    'Whatsapp' => '979101355',
                    'CorreoPersonal' => null,
                    'CorreoInstitucional' => 'fteran@unprg.edu.pe',
                    'Tipo' => 'J',
                ],
                [
                    'Nombre' => 'Giordy Xavier',
                    'ApellidoPaterno' => 'Galan',
                    'ApellidoMaterno' => 'Samame',
                    'Celular' => '988448685',
                    'Whatsapp' => '988448685',
                    'CorreoPersonal' => 'giordygalan2105@unprg.edu.pe',
                    'CorreoInstitucional' => 'ggalans@unprg.edu.pe',
                    'Tipo' => 'P',
                ],
                [
                    'Nombre' => 'Ingrid Lisset',
                    'ApellidoPaterno' => 'Guevara',
                    'ApellidoMaterno' => 'Mio',
                    'Celular' => '944702712',
                    'Whatsapp' => '944702712',
                    'CorreoPersonal' => null,
                    'CorreoInstitucional' => 'iguevaram@unprg.edu.pe',
                    'Tipo' => 'P',
                ],
            ]
        );

    }
}
