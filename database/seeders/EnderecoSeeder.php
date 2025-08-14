<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            [
                'id_cliente' => 1,
                'cep' => '12345-678',
                'numero' => '100',
                'complemento' => 'Apto 101',
                'bairro' => 'Centro',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 2,
                'cep' => '23456-789',
                'numero' => '200',
                'complemento' => 'Casa',
                'bairro' => 'Jardim',
                'cidade' => 'Rio de Janeiro',
                'estado' => 'RJ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 3,
                'cep' => '34567-890',
                'numero' => '300',
                'complemento' => 'Apto 303',
                'bairro' => 'Bela Vista',
                'cidade' => 'Belo Horizonte',
                'estado' => 'MG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 4,
                'cep' => '45678-901',
                'numero' => '400',
                'complemento' => null,
                'bairro' => 'Centro',
                'cidade' => 'Curitiba',
                'estado' => 'PR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
