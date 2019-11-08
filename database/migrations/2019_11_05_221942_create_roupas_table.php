<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoupasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roupas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('marca_id')->unsigned()->nullable();
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->integer('estacao_ano_id')->unsigned()->nullable();
            $table->foreign('estacao_ano_id')->references('id')->on('estacao_anos');
            $table->integer('tamanho_id')->unsigned()->nullable();
            $table->foreign('tamanho_id')->references('id')->on('tamanhos');
            $table->integer('tipo-roupa_id')->unsigned()->nullable();
            $table->foreign('tipo-roupa_id')->references('id')->on('tipos');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('preco');
            $table->string('descricao');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roupas');
    }
}
