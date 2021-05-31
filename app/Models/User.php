<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'apellido',
        'fechaN',
        'sexo',
        'email',
        'password',
        'tipoUser',
        'imagen',
        'plan',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Evento que se ejecuta cuando un usuario es creado: 
    protected static function boot()
    {
        parent::boot(); 
        //Asignar perfil una vez se haya creado un usuario nuevo: 
        static::created(function($user){
            $user->perfil()->create(); 
        });
    }

    /**Relacion de 1 a muchos de Usuarios a Recetas */
    public function recetas()
    {
        return $this->hasMany(Receta::class); 
    }
    public function entrenos()
    {
        return $this->hasMany(Receta::class); 
    }
    //Relacion de 1:1 de usaurio y perfil: 
    public function perfil()
    {
        return $this->hasOne(Perfil::class); 
    }

    //Likes que el usuario le ha dado me gusta: 
    public function meGusta() 
    {
        return $this->belongsToMany(Receta::class, 'likes_receta'); 
    }
    //Relacion de un usuario a muchos testimonios
    public function testimonios(){
        return $this->hasMany(Testimoniales::class); 
    }
   
   
    //Relacion de un usuario a muchos noticas
     public function noticias(){
        return $this->hasMany(Noticias::class); 
    }
}
