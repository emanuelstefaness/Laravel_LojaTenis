<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('itens_pedido')->insert([
            ['id_pedido' => 1, 'id_produto' => 1, 'quantidade' => 2, 'preco_unitario' => 399.90, 'created_at' => now(), 'updated_at' => now()],
            ['id_pedido' => 2, 'id_produto' => 2, 'quantidade' => 1, 'preco_unitario' => 349.90, 'created_at' => now(), 'updated_at' => now()],
            ['id_pedido' => 3, 'id_produto' => 3, 'quantidade' => 3, 'preco_unitario' => 299.90, 'created_at' => now(), 'updated_at' => now()],
            ['id_pedido' => 4, 'id_produto' => 4, 'quantidade' => 1, 'preco_unitario' => 249.90, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Atualizar total dos pedidos
        DB::table('pedidos')->where('id', 1)->update(['total' => 399.90*2]);
        DB::table('pedidos')->where('id', 2)->update(['total' => 349.90*1]);
        DB::table('pedidos')->where('id', 3)->update(['total' => 299.90*3]);
        DB::table('pedidos')->where('id', 4)->update(['total' => 249.90*1]);
    }
}
