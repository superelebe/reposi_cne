<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Carbon\Carbon;

/**
 * Class Event.
 *
 * @author  The scaffold-interface created at 2017-03-17 03:58:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Event extends Model
{
	use Sluggable;
	use SoftDeletes;

	protected $dates = ['deleted_at','start', 'end'];
    
    public function scopeEventoActivo($query){
        $now = Carbon::today('America/Mexico_City');
        return $query->where('end', '>=',$now)->orderBy('start')->limit(5);
    }
    protected $table = 'events';
    protected $fillable = ['title', 'start', 'end', 'imagen', 'color','subtitulo','descripcion', 'activo', 'url'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

	
}
