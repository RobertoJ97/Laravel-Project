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
        Schema::create('plan_formacions', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->unsignedBigInteger('set_id')->nullable();
            $table->unsignedBigInteger('estudiantes_id')->nullable();
            $table->unsignedBigInteger('responsable_id')->nullable();
            $table->unsignedBigInteger('profesor_id')->nullable();
            $table->string('disciplina');
            $table->string('asignatura');
            $table->integer('cant_horas');
            $table->integer('cant_horas_semanal');
            $table->string('centro_desarrollo');
            $table->string('grupo_investigacion');
            $table->string('nombre_proyecto');
            $table->string('tipo_proyecto');
            $table->string('rol_desempena');
            $table->timestamps();

            $table->foreign('set_id')->references('id')->on('sets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estudiantes_id')->references('id')->on('estudiantes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('responsable_id')->references('id')->on('responsable_p_i_d_s')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete('cascade')->onUpdate('cascade');
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
