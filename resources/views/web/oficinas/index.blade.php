@extends('layouts.web')

@section('title', '404')

@section('content')
    <img class="portada-seccion mostrar-escritorio-img" src="{{ asset('web/images/img-portada-oficinasPlantas-escritorio.png') }}" alt="">
    <img class="portada-seccion mostrar-movil-img" src="{{ asset('web/images/img-portada-oficinasPlantas-movil.png') }}" alt="">
    <div class="contenido">
        <div class="submenu">
            <a href="/"><p>Inicio</p></a>
            <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt=""> 
            <a href="/oficinas" class="seccion-actual"><p>Oficinas</p></a>
        </div>

        <div class="oficinas">
            <div class="mostrar-movil">
                <div class="titulo-info ">
                    <h3>casa matriz</h3>
                </div>
            </div>
            
            <div class="casa-matriz">
                <img src="{{ asset('web/images/img-casa-matriz.png') }}" alt=""> 
                <div class="txt-casa-matriz">
                    <div class="mostrar-escritorio">
                        <div class="titulo-info">
                            <h3>casa matriz</h3>
                        </div>
                    </div>
                    
                    <div class="oficinas-n casa-matriz-bottom">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                </div>
            </div>
            {{-- Oficinas --}}
            <div class="titulo-info ocultar-titulo-oficinas">
                <h3>Oficinas</h3>
            </div>
            <div>
                <div class="opcion-oficinas-n btn-oficinas">
                    <p>Oficinas</p>
                    <p class="btn-opcion-informacion opcion-cerrado opcion-cerrado-oficinas">+</p>
                    <p class="btn-opcion-informacion opcion-abierto opcion-abierto-oficinas">-</p>
                </div>
                <div class="oficinas-grid ocultar-seccion-oficinas">
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                </div>
            </div>
            
            {{-- Plantas --}}
            <div class="titulo-info ocultar-titulo-oficinas">
                <h3>plantas</h3>
            </div>
            <div>
                <div class="opcion-oficinas-n btn-plantas">
                    <p>Plantas</p>
                    <p class="btn-opcion-informacion opcion-cerrado opcion-cerrado-plantas">+</p>
                    <p class="btn-opcion-informacion opcion-abierto opcion-abierto-plantas">-</p>
                </div>
                <div class="oficinas-grid ocultar-seccion-oficinas">
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                    
                    <div class="oficinas-n">
                        <h5>Santiago</h5>
                        <p>Avenida Vitacura N° 4465</p>
                        <p>Código Postal 7630290</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    @push('extra-css')
    @endpush

    @push('extra-js')
    @endpush

@endsection