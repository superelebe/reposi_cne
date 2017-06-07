<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	public function usuarios(){
		return $this->hasMany(User::class);
	}
	public function subarea(){
		return $this->hasMany(Subarea::class);
	}
	protected $table = 'servicios';
    protected $fillable = [
        'nombre'
    ];
}
