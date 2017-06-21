<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
	public function organigrama(){
		return $this->hasMany(Organigrama::class);
	}
	protected $table = 'puesto';
    protected $fillable = [
        'titulo'
    ];
}
