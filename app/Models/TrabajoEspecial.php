<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrabajoEspecial extends Model
{
    protected $table = 'trabajo_especials';
    protected $fillable = [
        'descripcion',
        'nombre_cliente',
        'telefono',
        'fecha_entrega',
        'estado'
    ];
}
