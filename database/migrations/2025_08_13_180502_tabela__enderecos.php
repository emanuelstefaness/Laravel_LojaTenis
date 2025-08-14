<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('id_cliente') 
                  ->constrained('clientes')
                  ->onDelete('cascade');
            $table->string('cep', 9);
            $table->string('numero', 10);
            $table->string('complemento', 50)->nullable();
            $table->string('bairro', 80);
            $table->string('cidade', 100);
            $table->char('estado', 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        
    }
};
