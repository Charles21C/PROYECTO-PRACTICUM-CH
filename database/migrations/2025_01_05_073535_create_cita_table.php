<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaTable extends Migration
{
    /**
     * Ejecuta la migración.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained('patients')->onDelete('cascade'); // Relación con pacientes
            $table->foreignId('medico_id')->constrained('medicos')->onDelete('cascade'); // Relación con médicos
            $table->dateTime('fecha_hora'); // Fecha y hora de la cita
            $table->string('estado'); // Estado de la cita (pendiente, confirmada, etc.)
            $table->timestamps();
        });
    }

    /**
     * Revierte la migración.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
}
