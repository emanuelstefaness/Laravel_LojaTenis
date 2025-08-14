<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pagamentos')->insert([
            ['id_pedido' => 1, 'metodo' => 'Cartão de Crédito', 'valor' => 399.90*2, 'data_pagamento' => now(), 'status' => 'Pago', 'created_at' => now(), 'updated_at' => now()],
            ['id_pedido' => 2, 'metodo' => 'Boleto', 'valor' => 349.90*1, 'data_pagamento' => now(), 'status' => 'Pago', 'created_at' => now(), 'updated_at' => now()],
            ['id_pedido' => 3, 'metodo' => 'Pix', 'valor' => 299.90*3, 'data_pagamento' => now(), 'status' => 'Pago', 'created_at' => now(), 'updated_at' => now()],
            ['id_pedido' => 4, 'metodo' => 'Cartão de Débito', 'valor' => 249.90*1, 'data_pagamento' => now(), 'status' => 'Pago', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
