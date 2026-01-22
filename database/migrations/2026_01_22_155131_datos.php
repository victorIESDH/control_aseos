<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/*
Para implementar esta funcionalidad, se necesitarán las siguientes tablas:
1. Para la gestión de Usuarios se utilizará la tabla user del sistema.
2. Alumnos: Contiene información sobre los alumnos del instituto. Deberá incluir el nombre completo del alumnno y el grupo al que pertenece. (id, nombre, grupo)
3. Aseos: Contiene información sobre los baños disponibles en el instituto. Tan solo necesita un identificador único  y una descripción para cada baño .(id, descripcion)
4. Solicitudes: Registra las solicitudes de acceso a los baños. Se deberá almacenar el identificador del alumno, el identificador del baño, el identificador del profesor que realizó la solicitud y la fecha y hora de la solicitud. Tambien se deberá incluir un campo llave para controlar si esta fue devuelta o no.
(id, alumno_id, aseo_id, user_id, fecha_hora, llave)*/
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('grupo');
            $table->timestamps();
        });
        Schema::create('aseos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->timestamps();
        });
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumno_id')->constrained('alumnos');
            $table->foreignId('aseo_id')->constrained('aseos');
            $table->foreignId('user_id')->constrained('users');
            $table->dateTime('fecha_hora');
            $table->boolean('llave_devuelta')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('solicitudes');
        Schema::dropIfExists('aseos');
        Schema::dropIfExists('alumnos');
    }
};
