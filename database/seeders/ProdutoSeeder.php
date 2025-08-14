<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('produtos')->insert([
            [
                'id_marca' => 1,
                'nome' => 'Tênis Air Max',
                'descricao' => 'Tênis confortável para corrida',
                'preco' => 399.90,
                'estoque' => 20,
                'cor' => 'Preto',
                'tamanho' => '42',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_marca' => 2,
                'nome' => 'Tênis Superstar',
                'descricao' => 'Clássico da Adidas',
                'preco' => 349.90,
                'estoque' => 15,
                'cor' => 'Branco',
                'tamanho' => '41',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_marca' => 3,
                'nome' => 'Tênis Runner',
                'descricao' => 'Tênis leve para corrida',
                'preco' => 299.90,
                'estoque' => 10,
                'cor' => 'Azul',
                'tamanho' => '43',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_marca' => 4,
                'nome' => 'Tênis Classic',
                'descricao' => 'Tênis casual confortável',
                'preco' => 249.90,
                'estoque' => 25,
                'cor' => 'Cinza',
                'tamanho' => '42',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
