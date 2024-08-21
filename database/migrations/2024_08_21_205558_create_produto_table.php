<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('produto');
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            // Variável -> tipo (nome da variavel, quantidade de caracteres);
            $table->string('nome',100);
            // O nullable permite que o campo receba valores nulos sem preenchimento.
            $table->text('descricao', 100)->nullable();
            $table->integer('peso')->nullable();
            // No float o 8 será a quantidade de caracteres e o 2 será para a fração.
            // O paramentro default acresecenta na variavel valores caso não for declarado
            $table->float('preco-venda', 8, 2)->default(0.01);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);
            $table->timestamps();
        });
    }
};
