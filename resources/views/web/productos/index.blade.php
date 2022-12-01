@extends('layouts.web')

@section('title', 'Productos')

@section('content')
    <img class="portada-seccion mostrar-escritorio-img" src="{{ asset('web/images/img-portada-productos-escritorio.png') }}" alt="">
    <img class="portada-seccion mostrar-movil-img" src="{{ asset('web/images/img-portada-productos-movil.png') }}" alt="">
    
    <div>
        <div class="contenido">
            <div class="submenu">
                <a href="/"><p>Inicio</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt="">
                <a href="/productos" class="seccion-actual"><p>Productos</p></a>
            </div>
        </div>
        <div class="contenido-productos">
            <div class="productos">
                <a href="/productos/tipoYoghurt">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-yoghurt.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-leche.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Leche</p>
                        </div>
                    </div>
                </a>
                
                <a href="">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-crema-leche.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Crema de leche</p>
                        </div>
                    </div>
                </a>
                
                <a href="">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-dulce-leche.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Dulce de leche</p>
                        </div>
                    </div>
                </a>



                <a href="">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-margarina.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Margarina</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-mantequilla.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Mantequilla</p>
                        </div>
                    </div>
                </a>
                
                <a href="">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-nectar.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Néctar</p>
                        </div>
                    </div>
                </a>
                
                <a href="">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-postres.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Postres</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
    </div>

    @push('extra-css')
        {{-- <link rel="stylesheet" href="{{asset('web/js/flexslider/flexslider.css')}}"> --}}
    @endpush

    @push('extra-js')
        {{-- <script defer src="{{ asset('web/js/flexslider/jquery.flexslider.js') }}"></script> --}}
    @endpush
@endsection