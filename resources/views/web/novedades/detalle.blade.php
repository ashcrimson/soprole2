@extends('layouts.web')

@section('title', '404')

@section('content')
    <img class="portada-seccion mostrar-escritorio-img" src="{{ asset('web/images/img-portada-novedades-escritorio.png') }}" alt="">
    <img class="portada-seccion mostrar-movil-img" src="{{ asset('web/images/img-portada-novedades-movil.png') }}" alt="">
    <div class="contenido">
        <div class="submenu">
            <a href="/"><p>Inicio</p></a>
            <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt=""> 
            <a href="/novedades" class="seccion-actual"><p>Novedades</p></a>
        </div>

        <div class="novedades-detalle">
            <div class="novedades-detalle-txt">
                <div class="titulo-info">
                    <h2>Soprole apoya a empresas a ser más verdes</h2>
                </div>
                <p>
                    Tenemos una responsabilidad social ineludible: entregar sonrisas con productos sanos, ricos y nutritivos 
                    a miles de familias de todo el país.  Pero también tenemos un compromiso con la sostenibilidad donde hemos 
                    tenido una gran preocupación por buscar diferentes soluciones para reciclar nuestros envases. 
                </p>
                <p>
                    Tenemos una responsabilidad social ineludible: entregar sonrisas con productos sanos, ricos y nutritivos 
                    a miles de familias de todo el país.  Pero también tenemos un compromiso con la sostenibilidad donde hemos 
                    tenido una gran preocupación por buscar diferentes soluciones para reciclar nuestros envases. 
                </p>
            </div>
            
            <div class="novedades-detalle-img">
                <img src="{{ asset('web/images/img-novedades-2.png') }}" alt=""> 
            </div>
        </div>
    </div>

    @push('extra-css')
    @endpush

    @push('extra-js')
    @endpush

@endsection