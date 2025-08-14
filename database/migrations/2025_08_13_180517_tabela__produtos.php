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
    Schema::create('produtos', function (Blueprint $table) {
        $table->id(); 
        $table->foreignId('id_marca') 
              ->constrained('marcas')
              ->onDelete('cascade');
        $table->string('nome', 150);
        $table->text('descricao')->nullable();
        $table->decimal('preco', 10, 2);
        $table->integer('estoque');
        $table->string('cor', 50)->nullable();
        $table->string('tamanho', 5)->nullable();
        $table->string('imagem_url', 255)->nullable();
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
