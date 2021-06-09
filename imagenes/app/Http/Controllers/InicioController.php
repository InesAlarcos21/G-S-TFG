<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Noticias;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoriaReceta;
use App\Models\Nosotros;
use App\Models\Planes;
use App\Models\Testimoniales;
use App\Models\User;

class InicioController extends Controller
{
    public function index()
    {

        //Obtener las recetas mas nuevas: 
       // $nuevas = Receta::latest()->take(4)->get(); 
       $usuarios = User::all(); 
        $nosotros = Nosotros::all(); 
        $noticias = Noticias::latest()->take(3)->get(); 
        $planes = Planes::latest()->get(); 
        $testimonios = Testimoniales::latest()->take(3)->get(); 
        //Recetas por categoria: 
            //Obtener las cateogiras: 
        //    $categorias = CategoriaReceta::all(); 
        //    $noticias = Noticias::all(); 

            //Agrupar las recetas por la categoria: 
        //    $noticias =[]; 
        //    foreach($noticias as $noticia){
        //        $noticias[Str::slug($noticia->titulo)][] = Noticias::where('id', $noticia->id)->get(); 
        //    }
        //    $recetas =[]; 
        //    foreach($categorias as $categoria){
        //        $recetas[Str::slug($categoria->nombre_categoria)][] = Receta::where('categoria_id', $categoria->id)->take(3)->get(); 
        //    }
        //    $planes =[]; 
        //    foreach($planes as $plan){
        //        $planes[Str::slug($plan->nombre)][] = Noticias::where('id', $plan->id)->get(); 
        //    }
        //    $testimonios =[]; 
        //    foreach($testimonios as $testimonio){
        //        $testimonios[Str::slug($testimonio->titulo)][] = Noticias::where('id', $testimonio->id)->get(); 
        //    }
          

        //Mostrar las recetas por las más votadas: 
      //  $votadas = Receta::withCount('likes')->orderBy('likes_count','desc')->take(2)->get(); 
        return view('inicio.index', compact('noticias','planes', 'testimonios','nosotros','usuarios')); 
    }
}
