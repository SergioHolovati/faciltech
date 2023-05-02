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
        Schema::create('Tb_bancos', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('codigo')->unique(); 
            $table->string('nome');
        });
        
        Schema::create('Tb_convenios', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('codigo')->unique();
            $table->string('convenio'); 
            $table->float('verba'); 
            $table->integer('convenio_banco')->unsigned();
            $table->foreign('convenio_banco')->references('id')->on('Tb_bancos');
        });

        Schema::create('Tb_convenio_servicos', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('codigo')->unique(); 
            $table->integer('convenio_id')->unsigned();
            $table->foreign('convenio_id')->references('id')->on('Tb_convenios'); 
            $table->string('servico');
        });
        Schema::create('Tb_contratos', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('codigo')->unique(); 
            $table->integer('prazo'); 
            $table->float('valor'); 
            $table->dateTime('data_inclusao'); 
            $table->integer('convenio_servico')->unsigned();
            $table->foreign('convenio_servico')->references('id')->on('Tb_convenio_servicos');
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
