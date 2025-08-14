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
    Schema::create('pedidos', function (Blueprint $table) {
        $table->id(); 
        $table->foreignId('id_cliente')
              ->constrained('clientes')
              ->onDelete('cascade');
        $table->dateTime('data_pedido');
        $table->string('status', 20)->default('Pendente');
        $table->decimal('total', 10, 2);
        $table->timestamps();
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
