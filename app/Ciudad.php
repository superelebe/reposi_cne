<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
	public function afiliados(){
		return $this->hasMany(User::class);
	}
	protected $table = 'ciudades';
    protected $fillable = [
        'nombre'
    ];
    //
}
