<?php

namespace App\Http\Controllers;
use App\Models\Mensaje;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Mail;
use App\Mail\MensajeContacto;


class PageController extends Controller
{
    
    public function home(){ 
        return view('home');
    }
    public function quienesSomos(){
        return view('quienes-somos');
    }
    public function contacto(){   
        return view('contacto');
    }
    public function storeMensaje(){
        $mensaje = Mensaje::create([
            'nombre'=>request()->nombre,
            'asunto'=>request()->asunto,
            'mensaje'=>request()->mensaje
        ]);
        Mail::to('jorgearguello@live.com.ar')->send(new MensajeContacto($mensaje));
        // dd($mensaje);
        return redirect('/contacto')->with('status',"Se envió tu mensaje te responderemos a la brevedad");
    }
    public function mensaje(){
        $titulo = 'mensaje';
        $mensajes=Mensaje::all();
        return view('mensaje',compact('titulo','mensajes'));
    }
    
}