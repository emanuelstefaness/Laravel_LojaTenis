<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'nome' => 'Emanuel Jorge',
                'email' => 'emanuel@test.com',
                'senha' => bcrypt('123456'),
                'telefone' => '11999999999',
                'cpf' => '123.456.789-00',
                'data_nascimento' => '2000-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maria Silva',
                'email' => 'maria@test.com',
                'senha' => bcrypt('123456'),
                'telefone' => '11988888888',
                'cpf' => '987.654.321-00',
                'data_nascimento' => '1995-05-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'João Santos',
                'email' => 'joao@test.com',
                'senha' => bcrypt('123456'),
                'telefone' => '11977777777',
                'cpf' => '456.123.789-00',
                'data_nascimento' => '1988-12-22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Ana Pereira',
                'email' => 'ana@test.com',
                'senha' => bcrypt('123456'),
                'telefone' => '11966666666',
                'cpf' => '321.654.987-00',
                'data_nascimento' => '2002-07-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
