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
        Schema::create('megucas', function (Blueprint $table) { // vai criar uma tabela com essas informações
            $table->id();
            $table->string('nome', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // os métodos down são pra desfazer tudo que a migration fez
    {
        Schema::dropIfExists('megucas');
        // esse comando é auto explicativo, dropa a tabela, caso ela exista
    }
};
