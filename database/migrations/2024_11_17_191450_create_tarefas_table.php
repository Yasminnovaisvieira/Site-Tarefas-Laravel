<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasTable extends Migration
{
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->text('descricao')->nullable();
            $table->string('materia', 255);
            $table->date('vencimento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
}
