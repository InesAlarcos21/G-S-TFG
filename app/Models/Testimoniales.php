<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoniales extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen'
    ];


    //Testimonios de un usuario: 
    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id'); //La clave foranea de la tabla usuarios
    }
}