<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nomeAquicultor')->nullable();
            $table->string('atividade')->nullable();
            $table->string('CPF')->nullable();
            $table->string('rg')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('inscricaoEstadual')->nullable();
            $table->string('tipoPropriedade')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
