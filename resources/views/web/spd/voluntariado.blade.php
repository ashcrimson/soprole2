@extends('layouts.web')

@section('title', 'Propósito y su porque')

@section('content')
    <img class="portada-seccion mostrar-escritorio-img" src="{{ asset('web/images/img-portada-nosotros-escritorio.png') }}" alt="">
    <img class="portada-seccion mostrar-movil-img" src="{{ asset('web/images/img-portada-nosotros-movil.png') }}" alt="">
    
    <div>
        <div class="contenido">
            <div class="submenu">
                <a href="/"><p>Inicio</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt="">
                <a href=""><p>SPD</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt=""> 
                <a href="spd/voluntariado" class="seccion-actual"><p>Voluntariado</p></a>
            </div>
        </div>
        <div id="contenido-nosotros">
            <div class="fondo-primer-div-seccion">
                <div class="contenido">
                    <div id="menu-info-nosotros">
                        {{-- Menu de nosotros --}}
                        <div id="menu-nosotros" class="mostrar-escritorio">
                            <div id="tabla-menu-nosotros">
                                <a href="/spd/cultura-corporativa">
                                    <div class="border-top">
                                        <p>Cultura corporativa</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt="">  
                                    </div>
                                </a>
                                
                                <a href="/spd/trabajadores">
                                    <div>
                                        <p>Trabajadores</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt=""> 
                                    </div>
                                </a>
                                <a href="/spd/voluntariado">
                                    <div class="tabla-menu-seleccionado">
                                        <p>Voluntariado</p>
                                        <img src="{{ asset('web/images/icon-flecha-derecha.png') }}" alt=""> 
                                    </div>
                                </a>
                                <a href="/spd/proceso-de-la-leche">
                                    <div>
                                        <p>Proceso de la leche</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt=""> 
                                    </div>
                                </a>
                                <a href="/spd/proceso-del-yoghurt">
                                    <div>
                                        <p>Proceso del yoghurt</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt=""> 
                                    </div>
                                </a>
                                <a href="/spd/nuestros-productores">
                                    <div>
                                        <p>Nuestros productores</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt=""> 
                                    </div>
                                </a>
                                <a href="/spd/nuestras-certificaciones">
                                    <div>
                                        <p>Nuestras certificaciones</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt=""> 
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="flex-select-nosotros" class="nice-select mostrar-movil" tabindex="0">
                            <span class="current">Voluntariado</span>
                            <ul class="list">
                                <a href="/spd/cultura-corporativa">
                                    <li data-value="op1" class="option selected focus">Cultura corporativa</li>
                                </a>
                                <a href="/spd/trabajadores">
                                    <li data-value="op2" class="option">Trabajadores</li>
                                </a>
                                <a href="/spd/voluntariado">
                                    <li data-value="op3" class="option">Voluntariado</li>
                                </a>
                                <a href="/spd/proceso-de-la-leche">
                                    <li data-value="op4" class="option">Proceso de la leche</li>
                                </a>
                                <a href="/spd/proceso-del-yoghurt">
                                    <li data-value="op5" class="option">Proceso del yoghurt</li>
                                </a>
                                <a href="/spd/nuestros-productores">
                                    <li data-value="op6" class="option">Nuestros productores</li>
                                </a>
                                <a href="/spd/nuestras-certificaciones">
                                    <li data-value="op7" class="option">Nuestras certificaciones</li>
                                </a>
                            </ul>
                        </div>
                        
                        {{-- Decripcion de la seccion --}}
                        <div class="info-proposito mostrar-info contenido-mostrar-ocultar primer-div-seccion">
                            <div class="logo-titulo-info">
                                <div class="titulo-info">
                                    <h2>Texto de prueba</h2>
                                </div>
                                <div class="logo-info">
                                    <img src="{{ asset('web/images/logo-deporte-escolar.png') }}" alt=""> 
                                </div>
                            </div>
                            <div class="txt-info">
                                <h5>Por más de 70 años hemos estado preocupados por la alimentación y la salud de las personas. </h5>
                                <p>Tenemos una responsabilidad social ineludible: entregar sonrisas con productos sanos, ricos y 
                                    nutritivos a miles de familias de todo el país, pero también tenemos un compromiso con la 
                                    sostenibilidad donde hemos tenido una gran preocupación por buscar diferentes soluciones para 
                                    reciclar nuestros envases. 
                                </p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Contenido extra de la seccion --}}
            <div class="info-proposito mostrar-info contenido-mostrar-ocultar">
                <img class="img-100 mostrar-escritorio-img" src="{{ asset('web/images/img-1-nosotros-escritorio.png') }}" alt="">
                <img class="img-100 mostrar-movil-img" src="{{ asset('web/images/img-1-nosotros-movil.png') }}" alt="">
                
                <div class="fondo-segundo-div-seccion">
                    <div class="contenido">
                        <div class="segundo-div-seccion">
                            <div>
                                <div class="titulo-info">
                                    <h2>Texto de prueba</h2>
                                </div>
                                <div class="txt-info">
                                    <h5>Por más de 70 años hemos estado preocupados por la alimentación y la salud de las personas. </h5>
                                    <p>Tenemos una responsabilidad social ineludible: entregar sonrisas con productos sanos, ricos y 
                                        nutritivos a miles de familias de todo el país, pero también tenemos un compromiso con la 
                                        sostenibilidad donde hemos tenido una gran preocupación por buscar diferentes soluciones para 
                                        reciclar nuestros envases. 
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flexslider-seccion">
                                <ul class="slides">
                                    <!-- 1 -->
                                    <li style=" z-index:0; opacity: 1;" class="li-slider">
                                        <img src="{{ asset('web/images/img-1-slider-nosotros.png') }}" alt="">
                                    </li>
    
                                    <!-- 2 -->
                                    <li style=" z-index:0; opacity: 1;" class="li-slider">
                                        <img src="{{ asset('web/images/img-1-slider-nosotros.png') }}" alt="">
                                    </li>
    
                                    <!-- 3 -->
                                    <li style=" z-index:0; opacity: 1;" class="li-slider">
                                        <img src="{{ asset('web/images/img-1-slider-nosotros.png') }}" alt="">  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <img class="img-100 mostrar-escritorio-img" src="{{ asset('web/images/img-2-nosotros-escritorio.png') }}" alt="">
                <img class="img-100 mostrar-movil-img" src="{{ asset('web/images/img-2-nosotros-movil.png') }}" alt="">

                <div class="fondo-tercer-div-seccion">
                    <div class="contenido">
                        <div class="tercer-div-seccion">
                            <div class="titulo-info">
                                <h2>Tu sonrisa es lo más importante para nosotros</h2>
                            </div>
                            <div>
                                <iframe src="https://www.youtube.com/embed/lAc4vxO4ydU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Tabla --}}
                <div class="contenido">
                    <div class="tabla-div-seccion">
                        <div class="titulo-info">
                            <h3>Documentos</h3>
                        </div>
                        <div class="tabla-nosotros">
                            <div class="header-tabla-nosotros tamano-tabla">
                                <p>Nombre del documento</p>
                                <p class="tabla-descargar">Descargar</p>
                            </div>
                            <div class="tamano-tabla filas-tabla">
                                <p>Nombre del documento</p>
                                <a href=""><p class="tabla-descargar">Descargar documento</p></a>
                            </div>
                            <div class="tamano-tabla filas-tabla">
                                <p>Nombre del documento</p>
                                <a href=""><p class="tabla-descargar">Descargar documento</p></a>
                            </div>
                            <div class="tamano-tabla filas-tabla">
                                <p>Nombre del documento</p>
                                <a href=""><p class="tabla-descargar">Descargar documento</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('extra-css')
        <link rel="stylesheet" href="{{asset('web/js/flexslider/flexslider.css')}}">
    @endpush

    @push('extra-js')
        <script defer src="{{ asset('web/js/flexslider/jquery.flexslider.js') }}"></script>
        <script>
            // Flex Slider
            $(document).ready(function(){
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });
            });
        </script>
    @endpush
@endsection