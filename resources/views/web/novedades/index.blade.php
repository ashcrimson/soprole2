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

        <div class="novedades">
            <a href="novedades/detalle">
                <div class="novedades-n">
                    <div class="img-novedades">
                        <img src="{{ asset('web/images/img-novedades.png') }}" alt=""> 
                        <div class="fecha-novedades">
                            <h3>02</h3>
                            <p>Oct</p>
                        </div>
                    </div>
                    <div class="txt-novedades">
                        <h3>Soprole apoya a empresas a ser más verdes.</h3>
                        <p>Queremos que nuestros hijos crezcan en cuerpo y alma, para que sean felices, para que sean buenas personas.</p>
                    </div>
                </div>
            </a>

            <a href="novedades/detalle">
                <div class="novedades-n">
                    <div class="img-novedades">
                        <img src="{{ asset('web/images/img-novedades.png') }}" alt=""> 
                        <div class="fecha-novedades">
                            <h3>02</h3>
                            <p>Oct</p>
                        </div>
                    </div>
                    <div class="txt-novedades">
                        <h3>Soprole apoya a empresas a ser más verdes.</h3>
                        <p>Queremos que nuestros hijos crezcan en cuerpo y alma, para que sean felices, para que sean buenas personas.</p>
                    </div>
                </div>
            </a>
            
            <a href="novedades/detalle">
                <div class="novedades-n">
                    <div class="img-novedades">
                        <img src="{{ asset('web/images/img-novedades.png') }}" alt=""> 
                        <div class="fecha-novedades">
                            <h3>02</h3>
                            <p>Oct</p>
                        </div>
                    </div>
                    <div class="txt-novedades">
                        <h3>Soprole apoya a empresas a ser más verdes.</h3>
                        <p>Queremos que nuestros hijos crezcan en cuerpo y alma, para que sean felices, para que sean buenas personas.</p>
                    </div>
                </div>
            </a>


        </div>
    </div>

    @push('extra-css')
    @endpush

    @push('extra-js')
    @endpush

@endsection