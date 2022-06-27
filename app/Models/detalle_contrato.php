<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_contrato extends Model
{
    use HasFactory;
    protected $fillable = ['cotizacion','precio_final', 'contrato_id', 'servicio_id'];
}
