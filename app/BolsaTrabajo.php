<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class BolsaTrabajo extends Model
{
	protected $table = 'bolsa_trabajo';
    protected $fillable = [
        'titulo','sueldo','empresa','descripcion','start','end','activo', 'imagen'
    ];
}
