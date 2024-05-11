<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facultades', function (Blueprint $table) {
            $table->id('id_facultad');
            $table->string('nombre_facultad', 100);
            $table->timestamps();
        });

        Schema::create('LugarDetrabajo', function (Blueprint $table) {
            $table->id('id_lugar_de_trabajo');
            $table->string('nombre_lugar', 200);
            $table->unsignedBigInteger('id_facultad');
            $table->foreign('id_facultad')->references('id_facultad')->on('facultades');
            $table->timestamps();
        });

        Schema::create('Docente', function (Blueprint $table) {
            $table->id('id_docente');
            $table->string('nombre', 85);
            $table->string('apellido', 85);
            $table->string('tipo_indentificador', 20);
            $table->string('indentificacion', 20);
            $table->string('correo_intitucional', 100);
            $table->string('clave_intiticional', 20);
            $table->unsignedBigInteger('lugar_trabajo_id')->nullable();
            $table->foreign('lugar_trabajo_id')->references('id_lugar_de_trabajo')->on('LugarDetrabajo');
            $table->timestamps();
        });

        Schema::create('Horario', function (Blueprint $table) {
            $table->id('id_horario');
            $table->unsignedBigInteger('id_docente');
            $table->foreign('id_docente')->references('id_docente')->on('Docente');
            $table->string('dia_de_la_semana', 20);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->integer('jornada');
            $table->timestamps();
        });

        Schema::create('Usuarios', function (Blueprint $table) {
            $table->id('id_usurario');
            $table->string('nombre_usuario', 100);
            $table->string('clave', 20);
            $table->string('rol', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Usuarios');
        Schema::dropIfExists('Horario');
        Schema::dropIfExists('Docente');
        Schema::dropIfExists('LugarDetrabajo');
        Schema::dropIfExists('facultades');
    }
};
