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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profesor_id')->nullable();
            $table->unsignedBigInteger('asistencias_id')->nullable();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('solapin')->unique();
            $table->string('grupo');
            $table->string('correo')->unique();
            $table->timestamps();

           $table->foreign('profesor_id')->references('id')->on('profesors');
           $table->foreign('asistencias_id')->references('id')->on('asistencias');
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
