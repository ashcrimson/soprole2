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
                <a href=""><p>Nutriendo sonrisas</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt="">
                <a href="/nutriendo-sonrisas/ssc/en-que-consiste"><p>SSC</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt=""> 
                <a href="/nutriendo-sonrisas/ssc/que-hacemos-reciclado" class="seccion-actual"><p>¿Que hemos hecho con lo reciclado?</p></a>
            </div>
        </div>
        <div id="contenido-nosotros">
            <div class="fondo-primer-div-seccion">
                <div class="contenido">
                    <div id="menu-info-nosotros">
                        {{-- Menu de nosotros --}}
                        <div id="menu-nosotros" class="mostrar-escritorio">
                            <div id="tabla-menu-nosotros">
                                <a href="/nutriendo-sonrisas/ssc/en-que-consiste">
                                    <div class="border-top">
                                        <p>¿En qué consiste?</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt="">  
                                    </div>
                                </a>
                                
                                <a href="/nutriendo-sonrisas/ssc/acopio-retiro">
                                    <div>
                                        <p>Puntos de acopio y retiro</p> 
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt=""> 
                                    </div>
                                </a>
                                <a href="/nutriendo-sonrisas/ssc/como-reciclar">
                                    <div>
                                        <p>¿Como reciclar?</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt=""> 
                                    </div>
                                </a>
                                <a href="/nutriendo-sonrisas/ssc/cuanto-llevamos-reciclando">
                                    <div>
                                        <p>¿Cuanto llevamos reciclando?</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt=""> 
                                        
                                    </div>
                                </a>
                                <a href="/nutriendo-sonrisas/ssc/que-hacemos-reciclado">
                                    <div class="tabla-menu-seleccionado">
                                        <p>¿Que hemos hecho con lo reciclado?</p>
                                        <img src="{{ asset('web/images/icon-flecha-derecha.png') }}" alt="">
                                    </div>
                                </a>
                                <a href="/nutriendo-sonrisas/ssc/interescolar-ssc">
                                    <div>
                                        <p>Interescolar SSC</p>
                                        <img src="{{ asset('web/images/icon-flecha-abajo.png') }}" alt=""> 
                                    </div>
                                </a>
                                <a href="/nutriendo-sonrisas/escolar/d-escolar">
                                    <div class="nutriendo-sonrisas-principal">
                                        <p>Deportivo Escolar</p>
                                    </div>
                                </a>
                                <a href="/nutriendo-sonrisas/sociales/teleton">
                                    <div class="nutriendo-sonrisas-principal">
                                        <p>Deportivo Sociales</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="flex-select-nosotros" class="nice-select mostrar-movil" tabindex="0">
                            <span class="current">¿Que hemos hecho con lo reciclado?</span>
                            <ul class="list">
                                <a href="/nutriendo-sonrisas/ssc/en-que-consiste">
                                    <li data-value="op1" class="option selected focus">¿En qué consiste?</li>
                                </a>
                                <a href="/nutriendo-sonrisas/ssc/acopio-retiro">
                                    <li data-value="op2" class="option">Puntos de acopio y retiro</li>
                                </a>
                                <a href="/nutriendo-sonrisas/ssc/como-reciclar">
                                    <li data-value="op3" class="option">¿Como reciclar?</li>
                                </a>
                                <a href="/nutriendo-sonrisas/ssc/cuanto-llevamos-reciclando">
                                    <li data-value="op4" class="option">¿Cuanto llevamos reciclando?</li>
                                </a>
                                <a href="/nutriendo-sonrisas/ssc/que-hacemos-reciclado">
                                    <li data-value="op5" class="option">¿Que hemos hecho con lo reciclado?</li>
                                </a>
                                <a href="/nutriendo-sonrisas/ssc/interescolar-ssc">
                                    <li data-value="op6" class="option">Interescolar SSC</li>
                                </a>
                                <a href="/nutriendo-sonrisas/escolar/d-escolar">
                                    <li data-value="op7" class="option">Deportivo escolar</li>
                                </a>
                                <a href="/nutriendo-sonrisas/sociales/teleton">
                                    <li data-value="op8" class="option">Deportivo sociales</li>
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