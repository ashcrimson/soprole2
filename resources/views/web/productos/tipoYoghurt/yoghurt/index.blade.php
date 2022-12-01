@extends('layouts.web')

@section('title', 'Yoghurt')

@section('content')
    <img class="portada-seccion mostrar-escritorio-img" src="{{ asset('web/images/img-portada-Yoghurt-escritorio.png') }}" alt="">
    <img class="portada-seccion mostrar-movil-img" src="{{ asset('web/images/img-portada-Yoghurt-movil.png') }}" alt="">
    
    <div>
        <div class="contenido">
            <div class="submenu">
                <a href="/"><p>Inicio</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt=""> 
                <a href="/productos"><p>Productos</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt="">
                <a href="/productos/tipoYoghurt"><p>Tipo Yoghurt</p></a>
                <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt="">
                <a href="/productos/tipoYoghurt/yoghurt" class="seccion-actual"><p>Yoghurt Producto</p></a>
            </div>
        </div>
        <div class="contenido">
            <div class="filtros-productos">
                <select name="" id="">
                    <option value="">Marca</option>
                    <option value="">value 1</option>
                    <option value="">value 2</option>
                </select>
                <select name="" id="">
                    <option value="">Subcategoría</option>
                    <option value="">value 1</option>
                    <option value="">value 2</option>
                </select>
            </div>
        </div>

        <div class="contenido-productos">
            <div class="productos-2">
                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                        </div>
                    </div>
                </a>

                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                        </div>
                    </div>
                </a>
                
                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                        </div>
                    </div>
                </a>
                
                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                        </div>
                    </div>
                </a>

                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                        </div>
                    </div>
                </a>

                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                        </div>
                    </div>
                </a>

                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                        </div>
                    </div>
                </a>
                
                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                        </div>
                    </div>
                </a>
                
                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
                    <div class="productos-n">
                        <div class="img-producto">
                            <img src="{{ asset('web/images/i-ygt-batifrut.png') }}" alt=""> 
                        </div>
                        <div class="nombre-producto">
                            <p>Yoghurt Batifrut sabor Durazno, 165g</p>
                        </div>
                    </div>
                </a>

                <a href="/productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección">
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
            <div class="flex-ver-mas-productos">
                <img src="{{ asset('web/images/i-flecha-down.png') }}" alt=""> 
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