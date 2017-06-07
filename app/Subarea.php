<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
    public function servicios(){
        return $this->belongsTo(Service::class);
    }
	protected $table = 'subareas';
    protected $fillable = [
        'nombre','servicios_id'
    ];
}
