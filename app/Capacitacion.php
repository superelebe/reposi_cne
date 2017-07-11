<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\DatesTranslator;

class Capacitacion extends Model
{
	protected $table = 'capacitaciones';
	protected $dates = ['start','end'];
    protected $fillable = [
        'title','start','end ','url','color','pdf', 'horarios', 'inversion', 'descripcion', 'lugar'
    ];
    public function scopeFechaActivo($query){
    	$now = Carbon::today('America/Mexico_City');
    	return $query->where('end', '>=',$now)->orderBy('start')->limit(10);
    }

}
