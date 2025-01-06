<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Ejecutar la migración.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id(); // ID de la cita
            $table->date('fecha'); // Fecha de la cita
            $table->time('hora'); // Hora de la cita
            $table->string('estado'); // Estado de la cita (pendiente, confirmada, etc.)
            $table->string('especialidad'); // Especialidad de la cita
            $table->foreignId('medico_id')->constrained('doctors')->onDelete('cascade'); // Médico asignado
            $table->foreignId('paciente_id')->constrained('patients')->onDelete('cascade'); // Paciente
            $table->timestamps(); // 
        });
    }

    /**
     * Revertir la migración.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
