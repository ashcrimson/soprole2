@extends('layouts.web')

@section('title', '404')

@section('content')
    <img class="portada-seccion mostrar-escritorio-img" src="{{ asset('web/images/img-portada-contacto-escritorio.png') }}" alt="">
    <img class="portada-seccion mostrar-movil-img" src="{{ asset('web/images/img-portada-contacto-movil.png') }}" alt="">
    <div class="contenido">
        <div class="submenu">
            <a href="/"><p>Inicio</p></a>
            <img src="{{ asset('web/images/icon-flecha-blue.png') }}" alt=""> 
            <a href="/contacto" class="seccion-actual"><p>contacto</p></a>
        </div>
        <form class="formulario-contacto" action="">
            <div class="titulo-info">
                <h2>Datos del contacto</h2>
            </div>
            <div class="contacto-grid">
                <div class="contacto-n">
                    <label for="">¿Consumidor o cliente?</label>
                    <select name="" id="">
                        <option value="">Seleccione</option>
                        <option value="">value 1</option>
                        <option value="">value 2</option>
                    </select>
                </div>

                <div class="contacto-n">
                    <label for="">Tipo de contacto</label>
                    <select name="" id="">
                        <option value="">Seleccione</option>
                        <option value="">value 1</option>
                        <option value="">value 2</option>
                    </select>
                </div>
            </div>


            <div class="titulo-info margin-top">
                <h2>Datos personales</h2>
            </div>
            <div class="contacto-grid">
                <div class="contacto-n">
                    <label for="">Nombre</label>
                    <input type="text" placeholder="Ingresa tu nombre" required>
                </div>

                <div class="contacto-n">
                    <label for="">RUT</label>
                    <input type="text" placeholder="Ingresa tu RUT" required>
                </div>

                <div class="contacto-n">
                    <label for="">Correo</label>
                    <input type="email" placeholder="john.doe@address.com" required>
                </div>

                <div class="contacto-n">
                    <label for="">Teléfono</label>
                    <input type="text" placeholder="Ingresa tu teléfono" required>
                </div>

                <div class="contacto-n">
                    <label for="">Dirección</label>
                    <input type="text" placeholder="Ingresa tu dirección" required>
                </div>

                <div class="contacto-n">
                    <label for="">Comuna</label>
                    <input type="text" placeholder="Ingresa tu comuna" required>
                </div>

                <div class="contacto-n">
                    <label for="">Ciudad</label>
                    <input type="text" placeholder="Ingresa tu ciudad" required>
                </div>
            </div>

            <label class="label-contactanos" for="">Escríbenos</label>
            <div class="contacto-grid-2">
                <div>
                    <textarea name="" id="" placeholder="Escríbenos el motivo de tu contacto..." required></textarea>
                </div>
                <div>
                    <div class="filebrowser span2">
                        <p>Elija un archivo (PDF, documento de Word, JPEG):  </p>
                        
                        <span class="filetext"></span>    
                    </div>
                    <input type="file" id="imagenFile" name="filebrowser" />
                </div>
                <div class="txt-terminos">
                    <p class="txt-1-terminos">Conoce nuestros</p>
                    <a class="txt-2-terminos" href="">Términos y Condiciones</a>
                </div>
            </div>
            <div class="enviar-contactanos">
                <div></div>
                <div class="btn-enviar">
                    <button>
                        <p>EVIAR </p>
                        <img src="{{ asset('web/images/i-correo.png') }}" alt=""> 
                    </button>
                </div>
                
            </div>
            
        </form>
            
    </div>

    @push('extra-css')
    @endpush

    @push('extra-js')
    @endpush

@endsection