<?php

namespace App\Http\Controllers;

use App\Mail\ContactoGyppt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    //
    public function index()
    {
        return view('contactos.create'); 
    }
    public function create()
    {
        return view('contactos.create'); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'duda' => 'required', 
            'descripcion' => 'required',
            'email' => 'required|email'
        ]); 
        $correo = new ContactoGyppt($request->all()); 
        Mail::to('ialarcosq02@gmail.com')->send($correo); 
        return redirect()->route('contactos.create')->with('info','Mensaje enviado correctamente'); 
    }
}
