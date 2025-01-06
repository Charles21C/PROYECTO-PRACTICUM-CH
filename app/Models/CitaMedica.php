<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaMedica extends Model
{
    use HasFactory;

    // Definir el nombre de la tabla
    protected $table = 'citas';

    // Definir los atributos que son asignables
    protected $fillable = [
        'fecha',
        'hora',
        'estado',
        'especialidad',
        'medico_id',
        'paciente_id',
    ];

    // Relación con el modelo de paciente
    public function paciente()
    {
        return $this->belongsTo(Patients::class, 'paciente_id');
    }

    // Relación con el modelo de médico
    public function medico()
    {
        return $this->belongsTo(Doctor::class, 'medico_id');
    }
}
