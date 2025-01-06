<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioDelSistema extends Model
{
    use HasFactory;

    protected $fillable =[
        
        'Id',
        'Contraseña',
        'NombreDeUsuario',
        'TipoDeUsuario',
        ];
    
}
