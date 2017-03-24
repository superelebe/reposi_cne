<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'register_users';
    protected $fillable = [
        'empresa', 'email', 'password','representante','direccion','telefono','rfc','ciudad_id','servicio_id', 'certificados', 'estatus'
    ];

    protected   $events = [
        'created' => Events\NewUser::class
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
