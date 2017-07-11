<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class BolsaTrabajo extends Model
{
	use DatesTranslator;
	protected $table = 'bolsa_trabajo';
    protected $fillable = [
        'titulo','sueldo','empresa','descripcion','start','end','activo', 'imagen'
    ];
}
