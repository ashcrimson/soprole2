@extends('layouts.web')

@section('title', '404')

@section('content')
    <div class="flex-404">
        <h1>404</h1>
        <h1>PÁGINA NO DISPONIBLE</h1>
        <p>La página que buscabas no está disponible o no existe. Inténtalo más tarde o usa una de estas recomendaciones:</p>
        <div>
            <a href="/" class="btn-404">inicio</a>
            <a href="" class="btn-404">inicio</a>
        </div>
    </div>

    @push('extra-css')
    @endpush

    @push('extra-js')
    @endpush

@endsection