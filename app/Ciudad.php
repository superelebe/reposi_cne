<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
	public function afiliados(){
		return $this->hasMany(User::class);
	}
	public function vacante(){
		return $this->hasMany(BolsaTrabajo::class);
	}
	protected $table = 'ciudades';
    protected $fillable = [
        'nombre'
    ];
    //
}
