<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Perfil')->insert(
            [
                [
                    "Tipo" => "T",
                    "Estado" => "A",
                    "InicioAcceso" => "2020-03-25",
                    "FinAcceso" => "2020-03-28",
                    "CodigoUsuario" => "1",
                ],
            ]
        );
    }
}
