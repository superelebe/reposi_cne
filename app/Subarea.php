<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
    public static function obtenerSuabreasRegistro($id){
        return Subarea::where('servicios_id', '=', $id)->select('nombre','id')->get();
    }
    public function servicios(){
        return $this->belongsTo(Service::class);
    }
    public function subusuario(){
        return $this->hasMany(User::class);
    }
	protected $table = 'subareas';
    protected $fillable = [
        'nombre','servicios_id'
    ];
}
