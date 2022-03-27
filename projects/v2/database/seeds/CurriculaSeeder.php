<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This seeder has fake data, isn't real
     * @return void
     */
    // DATOS FALSOS
    public function run()
    {
        DB::table('Curricula')->insert(
            [
                // Administración con Mención en Gerencia Pública
                [
                    'Nombre' => '2000-I',
                    'CodigoPrograma' => '6',
                ],
                // Derecho y Ciencia Política
                [
                    'Nombre' => '2001-I',
                    'CodigoPrograma' => '62',
                ],
            ]
        );
    }
}
