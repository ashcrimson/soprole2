@extends('layouts.management')

@section('title', 'Edicion de sección')

@push('extra-css')
    <link rel="stylesheet" ref="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">
@endpush

@section('content')

    <h1 class="my-3">Editar sección</h1>

    <form action="{{ route('administracion.section.update', $section) }}" id="form-administrador" class="formulario" method="post" enctype="multipart/form-data">

        {{ method_field('PUT') }}
        @csrf

        <fieldset class="row">
            <div class="col-sm-4">
                <div class="form-group my-3">
                    <label for="titulo">Nombre</label>
                    <input id="nombre" name="nombre" class="form-control" type="text" tabindex="1" value="{{ old('nombre', $section->nombre) }}" />
                    <span class="text-danger">
                        @error('nombre')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group my-3">
                    <label for="imagen">Imagen Web</label>
                    <img src="{{ asset($section->imagen_web) }}" alt="Ampliar imagen" class="w-50 my-3">
                    <input type="file" name="imagen_web" accept="image/*" class="form-control">
                    @error('imagen_web')<span class="text-danger">{{ $message }} </span>@enderror 
                </div>

                <div class="form-group my-3">
                    <label for="imagen">Imagen Mobile</label>
                      <img src="{{ asset($section->imagen_mobile) }}" alt="Ampliar imagen" class="w-50 my-3">
                      <input type="file" name="imagen_mobile" accept="image/*" class="form-control">
                      @error('imagen_mobile')<span class="text-danger">{{ $message }} </span>@enderror
                </div>

            </div>
        </fieldset>

        <fieldset class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="orden">Orden</label>
                    <input id="orden" name="orden" min="1" value="{{ old('orden', $section->orden) }}" class="form-control" type="number" tabindex="3" />
                    <span class="text-danger">
                        @error('orden')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group my-3">
                    <input id="guardar" type="submit" class="btn btn-primary btn-lg" value="Guardar" />
                </div>

            </div>
        </fieldset>
    </form>

@endsection


@push('extra-js')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

    <script>
        
    </script>
@endpush
