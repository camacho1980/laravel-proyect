
{{-- MANDAR MENSAJE AL MAIL --}}

@component('mail::message')
#{{ $mensaje->nombre }} Le ha mandado un mensaje a la página

El mensaje era:

##Asunto:{{ $mensaje->asunto }}

{{ $mensaje->mensaje }}

Gracias,<br>
{{ config('app.name') }}
    
@endcomponent
