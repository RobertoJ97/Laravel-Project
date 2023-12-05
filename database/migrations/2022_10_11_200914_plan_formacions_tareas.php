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
        Schema::create('plan_formacions_tareas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->unsignedBigInteger('plan_formacion_id')->nullable();
            $table->unsignedBigInteger('tareas_id')->nullable();
            $table->timestamps();

            $table->foreign('plan_formacion_id')->references('id')->on('plan_formacions')->onDelete('cascade')->cascadeOnUpdate();
            $table->foreign('tareas_id')->references('id')->on('tareas')->onDelete('cascade')->cascadeOnUpdate();
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
