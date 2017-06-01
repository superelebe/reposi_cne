<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	public function usuarios(){
		return $this->hasMany(User::class);
	}
	protected $table = 'servicios';
    protected $fillable = [
        'nombre'
    ];
}
