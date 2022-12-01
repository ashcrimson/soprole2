@extends('layouts.web')

@section('title', 'Yoghurt')

@section('content')
    <img class="portada-seccion mostrar-escritorio-img" src="{{ asset('web/images/img-portada-yoghurtDetalle-escritorio.png') }}" alt="">
    <img class="portada-seccion mostrar-movil-img" src="{{ asset('web/images/img-portada-yoghurtDetalle-movil.png') }}" alt="">
    
    <div>
        <div class="contenido">
            <div class="submenu">
                <a href="/"><p>Inicio</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt=""> 
                <a href="/productos"><p>Productos</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt="">
                <a href="/productos/tipoYoghurt"><p>Tipo Yoghurt</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt="">
                <a href="/productos/tipoYoghurt/yoghurt"><p>Yoghurt Producto</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt="">
                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección" class="seccion-actual"><p>Yoghurt sabor chirimoya, 165g</p></a>
            </div>
        </div>
        <div class="contenido">
            <div class="titulo-info">
                <h2>Información nutricional</h2>
            </div>
            <div class="informacion-producto">
                <div class="opciones-informacion-producto">
                    <div class="opcion-informacion-n porciones opcion-informacion-seleccionado">
                        <p>Porciones</p>
                        <p class="btn-opcion-informacion opcion-cerrado opcion-cerrado-porciones">+</p>
                        <p class="btn-opcion-informacion opcion-abierto opcion-abierto-porciones">-</p>
                    </div>

                    <div class="opcion-informacion-n cantidad-porcion">
                        <p>Cantidad promedio por porción</p>
                        <p class="btn-opcion-informacion opcion-cerrado opcion-cerrado-cantidad-porcion">+</p>
                        <p class="btn-opcion-informacion opcion-abierto opcion-abierto-cantidad-porcion">-</p>
                    </div>

                    <div class="opcion-informacion-n cantidad-100g">
                        <p>Cantidad promedio por 100g</p>
                        <p class="btn-opcion-informacion opcion-cerrado opcion-cerrado-cantidad-100g">+</p>
                        <p class="btn-opcion-informacion opcion-abierto opcion-abierto-cantidad-100g">-</p>
                    </div>
                </div>
                <div class="detalle-informacion-producto">
                    <div class="tabla tabla-porciones">
                        <div class="tamano-tabla filas-tabla">
                            <p>Energía (kcal)</p>
                            <p class="tabla-descargar">97</p>
                        </div>
                        <div class="tamano-tabla filas-tabla">
                            <p>Energía (kcal)</p>
                            <p class="tabla-descargar">97</p>
                        </div>
                        <div class="tamano-tabla filas-tabla">
                            <p>Energía (kcal)</p>
                            <p class="tabla-descargar">97</p>
                        </div>
                    </div>

                    <div class="tabla tabla-cantidad-porcion">
                        <div class="tamano-tabla filas-tabla">
                            <p>Energía (kcal)</p>
                            <p class="tabla-descargar">96</p>
                        </div>
                        <div class="tamano-tabla filas-tabla">
                            <p>Energía (kcal)</p>
                            <p class="tabla-descargar">96</p>
                        </div>
                        <div class="tamano-tabla filas-tabla">
                            <p>Energía (kcal)</p>
                            <p class="tabla-descargar">96</p>
                        </div>
                    </div>

                    <div class="tabla tabla-cantidad-100g">
                        <div class="tamano-tabla filas-tabla">
                            <p>Energía (kcal)</p>
                            <p class="tabla-descargar">98</p>
                        </div>
                        <div class="tamano-tabla filas-tabla">
                            <p>Energía (kcal)</p>
                            <p class="tabla-descargar">98</p>
                        </div>
                        <div class="tamano-tabla filas-tabla">
                            <p>Energía (kcal)</p>
                            <p class="tabla-descargar">98</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="titulo-info">
                <h2>Productos relacionados</h2>
            </div>
            <div class="contenido-productos contenido-productos-detalle">
                <div class="productos-2">
                    <a href="">
                        <div class="productos-n">
                            <div class="img-producto">
                                <img src="{{ asset('web/images/i-ygt-sin-azucar.png') }}" alt=""> 
                            </div>
                            <div class="nombre-producto">
                                <p>Sin Azúcar</p>
                            </div>
                        </div>
                    </a>
    
                    <a href="">
                        <div class="productos-n">
                            <div class="img-producto">
                                <img src="{{ asset('web/images/i-ygt-protein.png') }}" alt=""> 
                            </div>
                            <div class="nombre-producto">
                                <p>Protein+</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="">
                        <div class="productos-n">
                            <div class="img-producto">
                                <img src="{{ asset('web/images/i-ygt-pack-uno.png') }}" alt=""> 
                            </div>
                            <div class="nombre-producto">
                                <p>Pack Uno Colación </p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="">
                        <div class="productos-n">
                            <div class="img-producto">
                                <img src="{{ asset('web/images/i-ygt-uno.png') }}" alt=""> 
                            </div>
                            <div class="nombre-producto">
                                <p>Uno</p>
                            </div>
                        </div>
                    </a>
    
                    <a href="/productos/yoghurts/yoghurt-batifrut-Selección">
                        <div class="productos-n">
                            <div class="img-producto">
                                <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                            </div>
                            <div class="nombre-producto">
                                <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                            </div>
                        </div>
                    </a>
    
                   
                </div>
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