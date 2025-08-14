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
    Schema::create('itens_pedido', function (Blueprint $table) {
        $table->id(); 
        $table->unsignedBigInteger('id_pedido');  // corrigido
        $table->unsignedBigInteger('id_produto'); // corrigido
        $table->integer('quantidade');
        $table->decimal('preco_unitario', 10, 2);
        $table->timestamps();

        $table->foreign('id_pedido')
              ->references('id')
              ->on('pedidos')
              ->onDelete('cascade');

        $table->foreign('id_produto')
              ->references('id')
              ->on('produtos')
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
