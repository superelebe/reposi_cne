<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Banner.
 *
 * @author  The scaffold-interface created at 2017-03-17 03:52:36pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Banner extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
    public function scopeActivo($query){
    	return $query->where('activo',1)->get();
    }
	
    protected $table = 'banners';
    protected $fillable = ['titulo', 'imagen', 'thumb', 'link'];
	
}
