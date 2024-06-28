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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->string('sacador')->nullable(false);
            $table->string('descricao');
            $table->double('vlr_total', null, 2);
            $table->double('vlr_parcela', null, 2);
            $table->date('vencimento');
            $table->integer('qtd_parcelas');
            $table->date('dt_pagamento');
            $table->enum('status', ['pago', 'aberto'])->nullable(false);
            $table->string('responsavel');
            $table->string('obs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};
