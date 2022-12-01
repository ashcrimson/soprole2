@extends('layouts.web')

@section('title', 'Mensaje Contacto')

@section('content')
    <img class="portada-seccion mostrar-escritorio-img" src="{{ asset('web/images/img-portada-contacto-escritorio.png') }}" alt="">
    <img class="portada-seccion mostrar-movil-img" src="{{ asset('web/images/img-portada-contacto-movil.png') }}" alt="">
    <div class="flex-mensajeContacto">
        <h1>Mensaje enviado con éxito!</h1>
        <div>
            <a href="/contacto" class="btn-mensajeContacto">VOLVER</a>
        </div>
    </div>

    @push('extra-css')
    @endpush

    @push('extra-js')
    @endpush

@endsection