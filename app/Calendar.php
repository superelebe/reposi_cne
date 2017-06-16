<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use App\DatesTranslator;

class Calendar extends Model
{
	use Sluggable;

	protected $dates = ['deleted_at','start', 'end'];

    public function scopeCalendarActivo($query){
        $now = Carbon::today('America/Mexico_City');
        return $query->where('end', '>=',$now)->orderBy('start');
    }
    protected $table = 'calendar';
    protected $fillable = ['title', 'url','start', 'end', 'imagen', 'color','subtitulo','descripcion' , 'lugar', 'horarios' , 'inversion'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
