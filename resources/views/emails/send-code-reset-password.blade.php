@component('mail::message')

# Hola, {{ ucwords($user) }}

<p>Hemos recibido tu solicitud para restablecer contraseña.</p>

<p>Presione el boton para continuar con el proceso. </p>

@component('mail::button', ['url' => route('administracion.form.forgot.password', $token) ])
Restablecer Contraseña
@endcomponent
        
<h5>Equipo {{ config('app.name') }}</h5>
@endcomponent

