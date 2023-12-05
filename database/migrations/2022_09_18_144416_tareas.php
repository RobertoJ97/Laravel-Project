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
        Schema::create('tareas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->integer('semana');
            $table->string('actividades');
            $table->string('habiliadades');
            $table->integer('cant_horas');
            $table->string('resultado_esperado');
            $table->string('tipo_resultado');
            $table->double('evaluacion', 3, 2)->nullable();
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
        //
    }
};
