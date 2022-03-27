<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Usuario')->insert(
            [
                [
                    "Nombre" => "davidpv",
                    "Correo" => "dperalesv@unprg.edu.pe",
                    "Estado" => "A",
                    "InicioAcceso" => "2020-03-25",
                    "FinAcceso" => "2020-03-28",
                    "CodigoPersonal" => "1",
                ],
            ]
        );
    }
}
