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
        Schema::create('investigacion_bienes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->date('fecha_envio')->nullable();
            $table->string('cedula');
            $table->string('asesor');
            $table->boolean('tipificacion')->nullable();
            $table->string('direccion')->nullable();
            $table->string('matricula')->nullable();
            $table->string('referencia_castral')->nullable();
            $table->string('departamento')->nullable();
            $table->string('ciudad')->nullable();
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
        Schema::dropIfExists('investigacion_bienes');
    }
};
