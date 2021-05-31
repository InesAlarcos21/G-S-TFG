<?php

use App\Http\Controllers\AdminuserController;
use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio.index'); 


//Route::post('/auth', [App\Http\Controllers\RecetaController::class, 'store'])->name('register.store'); 


//ROLES: 

Route::get('/adminUser',  [App\Http\Controllers\AdminuserController::class, 'index'])->name('adminUser.index'); 
Route::get('/adminUser/{usuario}/edit', [App\Http\Controllers\AdminuserController::class, 'edit'])->name('adminUser.edit'); 
Route::put('/adminUser/{usuario}', [\App\Http\Controllers\AdminuserController::class, 'update'])->name('adminUser.update'); 
    


Route::put('/entrenadores/{usuario}', [App\Http\Controllers\EntrenadoresController::class, 'update'])->name('entrenadores.update');


Route::put('/expertos/{usuario}', [App\Http\Controllers\ExpertosController::class, 'update'])->name('expertos.update');




//RECETAS: 
Route::get('/recetas',  [App\Http\Controllers\RecetaController::class, 'index'])->name('recetas.index'); 
Route::get('/recetas/create', [App\Http\Controllers\RecetaController::class, 'create'] )->name('recetas.create'); 
Route::post('/recetas', [App\Http\Controllers\RecetaController::class, 'store'])->name('recetas.store'); 
Route::get('/recetas/{receta}', [App\Http\Controllers\RecetaController::class, 'show'])->name('recetas.show');
Route::get('/recetas/{receta}/edit', [App\Http\Controllers\RecetaController::class, 'edit'])->name('recetas.edit'); 
Route::put('/recetas/{receta}', [App\Http\Controllers\RecetaController::class, 'update'])->name('recetas.update');
Route::delete('/recetas/{receta}', [App\Http\Controllers\RecetaController::class, 'destroy'])->name('recetas.destroy');

//PERFILES: 
Route::get('/perfiles/{perfil}',[App\Http\Controllers\PerfilController::class, 'show'])->name('perfiles.show');
Route::get('/perfiles/{perfil}/edit',[App\Http\Controllers\PerfilController::class, 'edit'])->name('perfiles.edit');
Route::put('/perfiles/{perfil}',[App\Http\Controllers\PerfilController::class, 'update'])->name('perfiles.update');

//ALMACENAJE DE ME GUSTAS: 
Route::post('/recetas/{receta}', [App\Http\Controllers\LikesController::class, 'update'])->name('likes.update'); 

//CATEGORIAS: 
Route::get('/categoria/{categoriaReceta}',[App\Http\Controllers\CategoriasController::class, 'show'])->name('categorias.show');

//NOTICIAS: 
Route::get('/noticias',  [App\Http\Controllers\NoticiasController::class, 'index'])->name('noticias.index'); 
Route::get('/noticias/create',[App\Http\Controllers\NoticiasController::class, 'create'])->name('noticias.create');
Route::get('/noticias/{noticia}',[App\Http\Controllers\NoticiasController::class, 'show'])->name('noticias.show');
Route::post('/noticias', [App\Http\Controllers\NoticiasController::class, 'store'])->name('noticias.store'); 

//PLANES DE TRABAJO: 
Route::get('/planes/create',[App\Http\Controllers\PlanesController::class, 'create'])->name('planes.create');
Route::get('/planes/{plan}',[App\Http\Controllers\PlanesController::class, 'show'])->name('planes.show');
Route::post('/planes', [App\Http\Controllers\PlanesController::class, 'store'])->name('planes.store'); 
Route::get('/planes',  [App\Http\Controllers\PlanesController::class, 'index'])->name('planes.index'); 


//TESTIMONIALES: 

Route::get('/testimonios',  [App\Http\Controllers\TestimonialesController::class, 'index'])->name('testimonios.index'); 
Route::get('/testimonios/create',[App\Http\Controllers\TestimonialesController::class, 'create'])->name('testimonios.create');
Route::post('/testimonios', [App\Http\Controllers\TestimonialesController::class, 'store'])->name('testimonios.store'); 
Route::get('/testimonios',[App\Http\Controllers\TestimonialesController::class, 'show'])->name('testimonios.show');
//Almacena los testimonios por usuarios: 
Route::post('/testimonios/{testimonial}', [App\Http\Controllers\TestimoniosPropiosController::class, 'update'])->name('testimoniosPropios.update'); 

//BUSCADOR DE RECETAS: 
Route::get('/buscar', [App\Http\Controllers\RecetaController::class, 'search'])->name('buscar.search');
Route::get('/buscar', [App\Http\Controllers\AdminuserController::class, 'search'])->name('buscar.search');


//CALENDARIO: 
Route::get('/evento/form',[App\Http\Controllers\EventController::class,'form'])->name('evento.form');
Route::post('/evento/create',[App\Http\Controllers\EventController::class,'create'])->name('evento.create');
Route::get('/evento/details/{id}',[App\Http\Controllers\EventController::class,'details'])->name('evento.details');
Route::get('/evento/index',[App\Http\Controllers\EventController::class,'index'])->name('evento.index');
Route::get('/evento/index/{month}',[App\Http\Controllers\EventController::class,'index_month'])->name('evento.index_month');
Route::post('/evento/calendario',[App\Http\Controllers\EventController::class,'calendario'])->name('evento.calendario');
Route::get('/evento/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('evento.edit');
Route::put('/evento/{event}', [App\Http\Controllers\EventController::class, 'update'])->name('evento.update');
Route::delete('/evento/{evento}', [App\Http\Controllers\EventController::class, 'destroy'])->name('evento.destroy');


//NOSOTROS: 
Route::get('/nosotros',  [App\Http\Controllers\NosotrosController::class, 'index'])->name('nosotros.index'); 
Route::get('/nosotros/create',[App\Http\Controllers\NosotrosController::class, 'create'])->name('nosotros.create');
Route::post('/nosotros', [App\Http\Controllers\NosotrosController::class, 'store'])->name('nosotros.store'); 



//CONTACTO: 

Route::get('/contactos/create',[App\Http\Controllers\ContactoController::class, 'create'])->name('contactos.create');
Route::post('/contactos', [App\Http\Controllers\ContactoController::class, 'store'])->name('contactos.store'); 
Route::get('/contactos',  [App\Http\Controllers\ContactoController::class, 'index'])->name('contactos.index'); 


Route::get('/listado/{id}', [App\Http\Controllers\ListadoController::class, 'show'])->name('listado.show');
Route::get('/listado',  [App\Http\Controllers\ListadoController::class, 'index'])->name('listado.index'); 
Route::get('/listado/create',[App\Http\Controllers\ListadoController::class, 'create'])->name('listado.create');
Route::delete('/listado/{usuario}', [App\Http\Controllers\ListadoController::class, 'destroy'])->name('listado.destroy');
Route::get('/listado/{usuario}/edit', [App\Http\Controllers\ListadoController::class, 'edit'])->name('listado.edit');
Route::put('/listado/{usuario}', [App\Http\Controllers\ListadoController::class, 'update'])->name('listado.update');


Route::get('/comidas/create',[App\Http\Controllers\ComidasController::class, 'create'])->name('comidas.create');
Route::post('/comidas', [App\Http\Controllers\ComidasController::class, 'store'])->name('comidas.store'); 
Route::get('/comidas/{comida}/edit', [App\Http\Controllers\ComidasController::class, 'edit'])->name('comidas.edit');
Route::put('/comidas/{comida}',[App\Http\Controllers\ComidasController::class, 'update'])->name('comidas.update');
Route::get('/comidas/{id}', [App\Http\Controllers\ComidasController::class, 'show'])->name('comidas.show');

Route::get('/entrenos/create',[App\Http\Controllers\EntrenosController::class, 'create'])->name('entrenos.create');
Route::post('/entrenos', [App\Http\Controllers\EntrenosController::class, 'store'])->name('entrenos.store'); 
Route::get('/entrenos/{entreno}/edit', [App\Http\Controllers\EntrenosController::class, 'edit'])->name('entrenos.edit');
Route::put('/entrenos/{entreno}',[App\Http\Controllers\EntrenosController::class, 'update'])->name('entrenos.update');
Route::get('/entrenos/{id}', [App\Http\Controllers\EntrenosController::class, 'show'])->name('entrenos.show');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
