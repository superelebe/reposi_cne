<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organigrama extends Model
{
	public function puesto(){
		return $this->belongsTo(Puesto::class);
	}
	protected $table = 'organigrama';
    protected $fillable = [
        'nombre','imagen', 'puesto_id'
    ];
}
