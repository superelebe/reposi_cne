<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use App\DatesTranslator;

class Calendar extends Model
{
	use Sluggable, DatesTranslator;

	protected $dates = ['deleted_at','start', 'end'];

    public function scopeCalendarActivo($query){
        $now = Carbon::today('America/Mexico_City');
        return $query->where('end', '>=',$now)->orderBy('start')->limit(10);
    }
    protected $table = 'calendar';
    protected $fillable = ['titulo', 'url','start', 'end', 'imagen', 'color','subtitulo','descripcion'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }
}
