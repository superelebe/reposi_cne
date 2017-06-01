<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Capacitacion extends Model
{
	protected $table = 'capacitaciones';
	protected $dates = ['start','end'];
    protected $fillable = [
        'titulo','start','end ','url','color','pdf'
    ];
    public function scopeFechaActivo($query){
    	$now = Carbon::today('America/Mexico_City');
    	return $query->where('end', '>=',$now)->orderBy('start')->paginate(5);
    }
}
