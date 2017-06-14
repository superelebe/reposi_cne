<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use App\DatesTranslator;
/**
 * Class Article.
 *
 * @author  The scaffold-interface created at 2017-03-17 03:30:32pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Article extends Model
{
	use Sluggable, DatesTranslator;
	
	use SoftDeletes;
    
	protected $dates = ['deleted_at'];
	
    protected $table = 'articles';
    
    protected $fillable = ['titulo', 'subtitulo', 'cuerpo', 'imagen', 'slug'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

}
