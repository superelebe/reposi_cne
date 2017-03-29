<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $table = 'servicios';
    protected $fillable = [
        'nombre'
    ];
}
