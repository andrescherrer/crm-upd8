<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $cidades = [
            [
                "id" => 1,
                "estado_id" => 35,
                "nome" => "São Paulo",
            ],
            [
                "id" => 2,
                "estado_id" => 42,
                "nome" => "Florianópolis",
            ],
            [
                "id" => 3,
                "estado_id" => 51,
                "nome" => "Cuiabá",
            ],
            [
                "id" => 4,
                "estado_id" => 29,
                "nome" => "Salvador",
            ],
            [
                "id" => 5,
                "estado_id" => 17,
                "nome" => "Palmas",
            ],
        ];
        
        DB::table('cidades')->insert($cidades);
    }
}