<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pedidos')->insert([
            [
                'id_cliente' => 1,
                'data_pedido' => now(),
                'status' => 'Pendente',
                'total' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 2,
                'data_pedido' => now(),
                'status' => 'Pendente',
                'total' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 3,
                'data_pedido' => now(),
                'status' => 'Pendente',
                'total' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 4,
                'data_pedido' => now(),
                'status' => 'Pendente',
                'total' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
