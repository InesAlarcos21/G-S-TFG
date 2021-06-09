<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //Campos que se agregaran 
    protected $fillable=[
        'categoria_id','nombre', 'ingredientes', 'preparacion', 'imagen'
    ];
    //Obtener la categoria de la receta via clave foranea: 
    public function categoria()
    {
        return $this->belongsTo(CategoriaReceta::class);
    }

    //Obtener la informacion del usuario via clave foranea: 
    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id'); //La clave foranea de la tabla usuarios
    }

    //Like recibidos en una receta: 
    public function likes()
    {
        return $this->belongsToMany(User::class,'likes_receta'); 
    }
}
