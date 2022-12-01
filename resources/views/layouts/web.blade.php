<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soprole</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/js/niceselect/nice-select.css')}}">

    @stack('extra-css')

</head>
<body>
    {{-- Flex-black-fixed --}}
    <div class="flex-barra-menu">
    </div>
    {{-- SubMenu barra --}}
    <div class="sub-menu-opciones">
        <div class="cerrar-menu-barra cerrar-menu-movil">
            <p class="volver-menu">Volver</p>
            <img class="btn-cerrar-menu" src="{{ asset('web/images/i-cerrar-red.png') }}" alt="">
        </div>
        <div class="sub-menu-nosotros contenido-sub-menu">
            <div class="sub-titulo-menu">
                <h5>Nosotros</h5>
                <div>
                    <a href="/nosotros/proposito"><p>Ver todo</p></a>
                </div>
            </div>
            <div class="opciones-sub-menu">
                <a href="/nosotros/proposito">Propósito y su por qué</a>
                <a href="/nosotros/nuestras-historia">Nuestra historia</a>
                <a href="/nosotros/administracion">Administración: quiénes somos</a>
                <a href="/nosotros/emisor">Información emisor</a>
                <a href="/nosotros/productores-de-leche">Productores de leche</a>
                <a href="/nosotros/aviso-legal">Aviso legal</a>
            </div>
        </div>
        <div class="sub-menu-productos contenido-sub-menu">
            <div class="sub-titulo-menu">
                <h5>Marcas</h5>
                <div>
                    <a href="/marcas"><p>Ver todo</p></a>
                </div>
            </div>
            <div class="opciones-sub-menu">
                <a href="">Protein+</a>
                <a href="">ZeroLacto</a>
                <a href="">Requete</a>
                <a href="">Yoghito</a>
            </div>
            <div class="sub-titulo-menu">
                <h5>categorías</h5>
                <div>
                    <a href="/productos"><p>Ver todo</p></a>
                </div>
            </div>
            <div class="opciones-sub-menu">
                <a href="">Leche líquida</a>
                <a href="">Queso fresco</a>
                <a href="">Yoghurts</a>
                <a href="">Mantequilla</a>
                <a href="">Postres</a>
                <a href="">Margarina</a>
                <a href="">Queso maduro</a>

            </div>
        </div>
        <div class="sub-menu-spd contenido-sub-menu">
            <div class="sub-titulo-menu">
                <h5>SPD</h5>
                <div>
                    <a href="/spd/cultura-corporativa"><p>Ver todo</p></a>
                </div>
            </div>
            <div class="opciones-sub-menu">
                <a href="/spd/cultura-corporativa">Cultura</a>
                <a href="/spd/trabajadores">Tabajadores</a>
                <a href="/spd/voluntariado">Voluntariado</a>
                <a href="/spd/proceso-de-la-leche">Proceso de la leche</a>
                <a href="/spd/proceso-del-yoghurt">Proceso del yoghurt</a>
                <a href="/spd/nuestros-productores">Nuestros productores</a>
                <a href="/spd/nuestras-certificaciones">Nuestras certificaciones</a>
            </div>
        </div>
        <div class="sub-menu-sonrisas contenido-sub-menu">
            <div class="sub-titulo-menu">
                <h5>Nutriendo Sonrisas</h5>
            </div>
            <div class="opciones-sub-menu">
                <a href="/nutriendo-sonrisas/ssc/en-que-consiste">SSC</a>
                <a href="/nutriendo-sonrisas/ssc/acopio-retiro">Puntos de acopio y retiro</a>
                <a href="/nutriendo-sonrisas/ssc/como-reciclar">¿Como reciclar?</a>
                <a href="/nutriendo-sonrisas/ssc/cuanto-llevamos-reciclando">¿Cuanto llevamos reciclando?</a>
                <a href="/nutriendo-sonrisas/ssc/que-hacemos-reciclado">¿Que hemos hecho con lo reciclado?</a>
                <a href="/nutriendo-sonrisas/ssc/interescolar-ssc">Interescolar SSC</a>
                <a href="/nutriendo-sonrisas/escolar/d-escolar">D. Escolar</a>
                <a href="/nutriendo-sonrisas/escolar/deportivo">Deportivo escolar</a>
                <a href="/nutriendo-sonrisas/sociales/teleton">Teletón</a>
                <a href="/nutriendo-sonrisas/sociales/campañas">Campañas</a>
            </div>
            <div class="sub-titulo-menu">
                <h5>categorías</h5>
            </div>
            <div class="opciones-sub-menu">
                <a href="/nutriendo-sonrisas/ssc/en-que-consiste">SSC</a>
                <a href="/nutriendo-sonrisas/escolar/d-escolar">D. Escolar</a>
                <a href="/nutriendo-sonrisas/sociales/teleton">P. Sociales</a>
            </div>
        </div>
        <div class="sub-menu-novedades contenido-sub-menu">
            <div class="sub-titulo-menu">
                <h5>Novedades</h5>
            </div>
            <div class="opciones-sub-menu">
                <a href="/novedades/productores-tvc">Productos nuevos: TVC</a>
                <a href="/novedades/camapannas">Landing Campañas</a>
                <a href="/novedades/bases-legales-promociones">Bases legales Promociones</a>
            </div>
        </div>
        <div class="sub-menu-contacto contenido-sub-menu">
            <div class="sub-titulo-menu">
                <h5>Contactos</h5>
            </div>
            <div class="opciones-sub-menu">
                <a href="/contacto">Contacto consumidores</a>
                <a href="">Contacto clientes</a>
                <a href="">Quiere ser cliente</a>
                <a href="">trabaja con nosotros</a>
            </div>
        </div>
    </div>
    {{-- Menu barra--}}
    <div class="barra-menu">
        <div class="cerrar-menu-barra">
            <img src="{{ asset('web/images/logo-soprole.png') }}" alt="">
            <img class="btn-cerrar-menu" src="{{ asset('web/images/i-cerrar-red.png') }}" alt="">
        </div>
        <div class="opciones-menu-barra">
            <div class="opcion-menu-n">
                <a href="/">
                    <div class="txt-opcion-menu">
                        <img src="{{ asset('web/images/i-home-red.png') }}" alt="">
                        <p>Inicio</p>
                    </div>
                </a>
                
            </div>
            <div class="opcion-menu-n">
                <a href="/nosotros/proposito">
                    <div class="txt-opcion-menu">
                        <img src="{{ asset('web/images/i-nosotros-red.png') }}" alt="">
                        <p>Nosotros</p>
                    </div>
                </a>
                <div class="btn-opcion-menu">
                    <img class="btn-menu-nosotros btn-menu-abrir" src="{{ asset('web/images/i-flecha-derecha-menu.png') }}" alt="">
                    <img class="btn-menu-nosotros-cerrar btn-menu-cerrar" src="{{ asset('web/images/i-flecha-izquierda-menu.png') }}" alt="">
                </div>
            </div>

            <div class="opcion-menu-n">
                <a href="">
                    <div class="txt-opcion-menu">
                        <img src="{{ asset('web/images/i-productos-red.png') }}" alt="">
                        <p>Productos</p>
                    </div>
                </a>
                <div class="btn-opcion-menu">
                    <img class="btn-menu-productos btn-menu-abrir" src="{{ asset('web/images/i-flecha-derecha-menu.png') }}" alt="">
                    <img class="btn-menu-productos-cerrar btn-menu-cerrar" src="{{ asset('web/images/i-flecha-izquierda-menu.png') }}" alt="">
                </div>
            </div>

            <div class="opcion-menu-n">
                <a href="/spd/cultura-corporativa">
                    <div class="txt-opcion-menu">
                        <img src="{{ asset('web/images/i-spd-red.png') }}" alt="">
                        <p>SPD</p>
                    </div>
                </a>
                <div class="btn-opcion-menu">
                    <img class="btn-menu-spd btn-menu-abrir" src="{{ asset('web/images/i-flecha-derecha-menu.png') }}" alt="">
                    <img class="btn-menu-spd-cerrar btn-menu-cerrar" src="{{ asset('web/images/i-flecha-izquierda-menu.png') }}" alt="">
                </div>
            </div>

            <div class="opcion-menu-n">
                <a href="/nutriendo-sonrisas/ssc/en-que-consiste">
                    <div class="txt-opcion-menu">
                        <img src="{{ asset('web/images/i-sonrisa-red.png') }}" alt="">
                        <p>Nutriendo sonrisas</p>
                    </div>
                </a>
                
                <div class="btn-opcion-menu">
                    <img class="btn-menu-sonrisas btn-menu-abrir" src="{{ asset('web/images/i-flecha-derecha-menu.png') }}" alt="">
                    <img class="btn-menu-sonrisas-cerrar btn-menu-cerrar" src="{{ asset('web/images/i-flecha-izquierda-menu.png') }}" alt="">
                </div>
            </div>

            <div class="opcion-menu-n">
                <a href="/novedades">
                    <div class="txt-opcion-menu">
                        <img src="{{ asset('web/images/i-novedades-red.png') }}" alt="">
                        <p>Novedades</p>
                    </div>
                </a>
                <div class="btn-opcion-menu">
                    <img class="btn-menu-novedades btn-menu-abrir" src="{{ asset('web/images/i-flecha-derecha-menu.png') }}" alt="">
                    <img class="btn-menu-novedades-cerrar btn-menu-cerrar" src="{{ asset('web/images/i-flecha-izquierda-menu.png') }}" alt="">
                </div>
            </div>

            <div class="opcion-menu-n">
                <a href="/contacto">
                    <div class="txt-opcion-menu">
                        <img src="{{ asset('web/images/i-contacto-red.png') }}" alt="">
                        <p>Contacto</p>
                    </div>
                </a>
                <div class="btn-opcion-menu">
                    <img class="btn-menu-contacto btn-menu-abrir" src="{{ asset('web/images/i-flecha-derecha-menu.png') }}" alt="">
                    <img class="btn-menu-contacto-cerrar btn-menu-cerrar" src="{{ asset('web/images/i-flecha-izquierda-menu.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- Fin Menu barra --}}

    <header>
        {{-- {{ asset('') }} --}}
        <img id="fondo-menu-movil" src=" {{ asset('web/images/menu-movil.png') }}" alt="">
        <img id="fondo-menu-escritorio" src="{{ asset('web/images/menu-escritorio.png') }}" alt="">

        <div id="contenido-menu">
            <div id="logo-menu">
                <a href="/">
                    <img src="{{ asset('web/images/logo-soprole.png') }}" alt="">
                </a>
            </div>
            <div id="botones-menu">
                <div id="rrss-menu">
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-yt-gris.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-fb-gris.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-tw-gris.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-in-gris.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-tk-gris.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-li-gris.png') }}" alt=""> </a>
                </div>
                <div id="btn-menu">
                    <h2>MENÚ</h2>
                    <img class="mostrar-escritorio" src="{{ asset('web/images/icon-menu-bar.png') }}" alt="">
                    <img class="mostrar-movil" src="{{ asset('web/images/icon-menu-bar-2.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    
    <footer>
        <img id="fondo-menu-movil" src=" {{ asset('web/images/divisor-footer.png') }}" alt="">
        <div id="footer">
            <div id="logo-contactanos-footer">
                <a href="/"><img id="logo-footer" src="{{ asset('web/images/logo-soprole.png') }}" alt=""></a>
                <a href=""><img id="contactanos-footer" src="{{ asset('web/images/img-contactanos.png') }}" alt=""></a>
            </div>
            <div class="submenu-footer">
                <ul>
                    <li>
                        <a href="/nosotros/proposito">Nosotros</a>
                    </li>

                    
                    <li>
                        <a href="/marcas">Nuestras marcas</a>
                    </li>

                    <li>
                        <a href="/nutriendo-sonrisas/ssc/en-que-consiste">Nutriendo Sonrisas</a>
                    </li>

                    <li>
                        <a href="/novedades">Novedades</a>
                    </li>

                    <li>
                        <a href="/contacto">Contáctanos</a>
                    </li>
                </ul>
            </div>
            <div class="submenu-footer seccion-ocultar-footer">
                <ul>
                    <li>
                        <a href="">Políticas de Privacidad</a>
                    </li>

                    <li>
                        <a href="">Términos y condiciones</a>
                    </li>

                    <li>
                        <a href="/spd/nuestros-productores">Productores</a>
                    </li>

                    <li>
                        <a href="">Proveedores</a>
                    </li>
                </ul>
            </div>
            <div id="contac-rss-footer">
                <div id="contactos-footer">
                    <p>servicio al cliente</p>
                    <h2>600 600 6600</h2>
                    <p>servicio al consumidor</p>
                    <h2>800 22 00 11</h2>
                    <p>Venta telefónica</p>
                    <h2>600 364 6000</h2>
                </div>
                <div id="rrss-footer">
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-yt-white.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-fb-white.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-tw-white.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-in-white.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-tk-white.png') }}" alt=""> </a>
                    <a href="" target="_blank"> <img src="{{ asset('web/images/icon-li-white.png') }}" alt=""> </a>
                </div>
            </div>
        </div>
    </footer>

    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('/web/js/niceselect/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('web/js/script.js') }}"></script>
    <script>$('select').niceSelect();</script>
   @stack('extra-js')
</body>
</html>
