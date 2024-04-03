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
        Schema::create('medicao', function (Blueprint $table) {
            $table->id();
            $table->string('numero_equipe');
            $table->string('nome_equipe');
            $table->string('etapa');
            $table->string('peixe_1')->nullable();
            $table->string('peixe_2')->nullable();
            $table->string('peixe_3')->nullable();
            $table->string('peixe_4')->nullable();
            $table->string('peixe_5')->nullable();
            $table->string('peixe_6')->nullable();
            $table->string('peixe_7')->nullable();
            $table->string('peixe_8')->nullable();
            $table->string('peixe_9')->nullable();
            $table->string('penalidade_1')->nullable();
            $table->string('penalidade_2')->nullable();
            $table->string('penalidade_3')->nullable();
            $table->string('penalidade_4')->nullable();
            $table->string('penalidade_5')->nullable();
            $table->string('total_peixes')->nullable();
            $table->string('total_penalidades')->nullable();
            $table->string('total')->nullable();
            $table->string('total_desempate')->nullable();
            $table->datetime('data')->nullable();
            $table->string('usuario')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('penalidade_chegada')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('medicao');
    }
};
