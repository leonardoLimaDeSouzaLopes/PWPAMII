<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nomeUsuario');
            $table->string('senhaUsuario');
            $table->string('emailUsuario');
            $table->date('dataNascUsuario');
            $table->string('generoUsuario');
            $table->string('fotoUsuario');
            $table->decimal('alturaUsuario');
            $table->decimal('pesoUsuario');
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
        Schema::dropIfExists('usuario');
    }
};
