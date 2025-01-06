<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadisticasDeSalud extends Model
{
    use HasFactory;

    protected $fillable =[
        'Id',
        'Datos',
        'Indicador',
        'rangoTiempo',
    ];
}
