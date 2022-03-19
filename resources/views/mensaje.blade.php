

{{-- TABLA CON MENSAJES ID, NOMBRE, ASUNTO, MENSAJE --}}

@extends('layout')
@section('title','Mensaje')
@section('contenido')

<div class="col-12 col-md=8 mx-auto my-5">
    <h1>Mensajes</h1>
    <p>{{$titulo}}</p>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    
    <table class="table">   
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Asunto</th>
            <th scope="col">Mensaje</th>
        </tr>                
    @foreach($mensajes as $mensaje)    
        <tr>
            <th scope="col">{{$mensaje->id}}</th>
            <th scope="col">{{$mensaje->nombre}}</th>
            <th scope="col">{{$mensaje->asunto}}</th>
            <th scope="col">{{$mensaje->mensaje}}</th>      
        </tr>
    @endforeach            
</div>
@endsection

{{-- MANDAR MENSAJE AL MAIL --}}
{{-- 
@component('mail::message')
#{{ $mensaje->nombre }} Le ha mandado un mensaje a la página

El mensaje era:

##Asunto:{{ $mensaje->asunto }}

{{ $mensaje->mensaje }}

Gracias,<br>
{{ config('app.name') }}
    
@endcomponent --}}