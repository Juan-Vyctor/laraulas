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
        Schema::table('megucas', function (Blueprint $table) { // vai adicionar linhas na table que passamo
            $table->string('magia', 30);
            $table->integer('idade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('megucas', function (Blueprint $table) { // esse down vai desfazer as linhas
            // $table->dropColumn('magia');
            // $table->dropColumn('idade');
            // pode ir dando dropColumn de um em um, ou passar um array com todas 

            $table->dropColumn(['magia', 'idade']);
        });
    }
};
