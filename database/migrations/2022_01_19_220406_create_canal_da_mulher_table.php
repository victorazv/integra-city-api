<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanalDaMulherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canal_da_mulher', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('texto');
            $table->string('endereco')->nullable();
            $table->string('telefone')->nullable();
            $table->string('imagem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canal_da_mulher');
    }
}
