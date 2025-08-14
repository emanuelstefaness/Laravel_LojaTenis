<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pagamentos', function (Blueprint $table) {
        $table->id(); 
        $table->unsignedBigInteger('id_pedido'); // corrigido
        $table->string('metodo', 50);
        $table->decimal('valor', 10, 2);
        $table->dateTime('data_pagamento');
        $table->string('status', 20)->default('Pendente');
        $table->timestamps();

        $table->foreign('id_pedido')
              ->references('id')
              ->on('pedidos')
              ->onDelete('cascade');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
