<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\DatesTranslator;


class User extends Authenticatable
{
    use Notifiable, DatesTranslator;

    public function ciudad(){
        return $this->belongsTo(Ciudad::class);
    }

    public function servicios(){
        return $this->belongsTo(Service::class);
    }
    public function subarea(){
        return $this->belongsTo(Subarea::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'register_users';
    protected $fillable = [
        'empresa', 'email', 'password','representante','direccion','telefono','rfc','ciudad_id','servicio_id', 'certificados', 'estatus', 'verified' , 'email_token','subarea_id'
    ];

    protected   $events = [
        'created' => Events\NewUser::class
    ];

    public function scopeNoAfiliados($query){
        return $query->where('estatus','=','espera')->orderBy('created_at','desc');
    }

    public function scopeAfiliados($query){
        return $query->where('estatus','=','afiliado')->orderBy('created_at','desc');
    }
    public function verified()
    {
        $this->verified = 1;
        $this->email_token = null;
        $this->save();
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
