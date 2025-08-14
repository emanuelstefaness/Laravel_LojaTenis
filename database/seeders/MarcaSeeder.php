<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('marcas')->insert([
            ['nome' => 'Nike', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Adidas', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Puma', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Reebok', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
