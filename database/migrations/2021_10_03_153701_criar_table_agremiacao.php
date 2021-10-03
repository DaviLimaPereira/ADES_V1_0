<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTableAgremiacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agremiacaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 160);
            $table->string('nomecompleto', 160);
            $table->date('fundacao');
            $table->text('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agremiacaos');
    }
}
