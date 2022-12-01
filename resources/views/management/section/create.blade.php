@extends('layouts.management')

@section('title', 'Creación de sección')

@push('extra-css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" rel="stylesheet" />
@endpush

@section('content')

    <a href="{{ route('administracion.page.index', ['page' => $page->slug]) }}" class="enlace btn btn-primary my-3"><i class="bi bi-arrow-bar-left"></i> volver al listado</a>

    <h1>Crear sección</h1>

    <form action="{{ route('administracion.section.store') }}" id="form-administrador" class="formulario" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $page->id }}" name="pagina_id">
        <fieldset class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="form-floating my-3">
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre" autocomplete="new-password" value="{{ old('nombre') }}">
                        <label for="nombre">Nombre</label>
                        @error('nombre')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>   
                </div>

                <div class="form-group my-3">
                    <label for="imagen">Imagen Web</label>
                    <input type="file" class="form-control" name="imagen_web" accept="image/*">
                    @error('imagen_web')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="imagen">Imagen Mobile</label>
                    <input type="file" class="form-control" name="imagen_mobile" accept="image/*">
                    @error('imagen_mobile')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

            </div>
        </fieldset>

        <fieldset class="row">
            <div class="col-sm-6">
                <div class="form-group my-2class="form-control" ">
                        <div class="grillaSeleccionLayout">
                            <label for="imagen" class="my-3">Seleccione el layout</label>
                            <div class="wp-layout mb-1">
                                <div class="layout-item layout-item-one rounded p-3">
                                    <div class="shadow-sm p-3 rounded mx-1 h-100 bg-secondary"></div>
                                </div>

                                <div class="layout-item layout-item-two rounded mx-2 layout-item-two-column p-3">
                                    <div class="shadow-sm p-3 rounded mx-1 h-100 bg-secondary"></div>
                                    <div class="shadow-sm p-3 rounded mx-1 h-100 bg-secondary"></div>
                                </div>
                            </div>

                            <div class="wp-layout">
                                <div class="wp-check">
                                    <input type="radio" name="layout" value="1" class="select-layout select-layout-one" {{ old('layout') == 1 ? 'checked' : '' }}/>
                                </div> 

                                <div class="wp-check">
                                    <input type="radio" name="layout" value="2" class="select-layout select-layout-two" {{ old('layout') ==2 ? 'checked' : '' }}/>
                                </div>  
                            </div>     
                        </div>
                        @error('layout') <span class="text-danger d-block">{{ $message }}</span>@enderror
                    </div>
                </div>
        </fieldset>
            
        <fieldset class="row">
            <div class="col-sm-10">
                <div class="wp-layout-multiple" style="display: none">

                    <div class="my-2">
                        
                        <label for="select-column-left">Item para la columna izquierda</label>

                        @include('_partials/items/select', ['direction' => 'left'])

                        <div class="wp-texto-left" style="display: none">
                            <textarea name="texto" id="texto1" class="form-control texto" rows="5">{{ old('texto') }}</textarea>
                            @error('texto')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="wp-slider-left" style="display: none">
                            @include('_partials/items/slider')
                        </div>
    
                        <div class="wp-video-left" style="display: none">
                            @include('_partials/items/video')
                        </div>

                        <div class="wp-documentos-left" style="display: none">
                            @include('_partials/items/documents')
                        </div>
                    </div>

                    <div class="my-2">
                        <label for="select-column-right">Item para la columna derecha</label>

                        @include('_partials/items/select', ['direction' => 'right'])

                        <div class="wp-texto-right" style="display: none">
                            <textarea name="texto" id="texto2" class="form-control texto" rows="5">{{ old('texto') }}</textarea>
                            @error('texto')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="wp-slider-right" style="display: none">
                            @include('_partials/items/slider')
                        </div>

                        <div class="wp-video-right" style="display: none">
                            @include('_partials/items/video')
                        </div>

                        <div class="wp-documentos-right" style="display: none">
                            @include('_partials/items/documents')
                        </div>

                    </div>
                    
                </div>
            </div>
        </fieldset>

        <fieldset class="row">
            <div class="col-sm-4">
                <div class="form-group my-4">
                    <div class="form-floating my-3">
                        <input type="number" name="orden" class="form-control" id="orden" placeholder="orden" autocomplete="new-password" min="1" value="{{ old('orden') }}">
                        <label for="orden">Orden</label>
                        @error('orden')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group my-4">
                    <input id="guardar" type="submit" class="btn btn-primary btn-lg" value="Guardar" />
                </div>

            </div>
        </fieldset>
    </form>

    @push('extra-js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    
    <script>

        $(document).ready(function(){
            if($('.select-layout-two').is(":checked")) $('.wp-layout-multiple').show();
            if($('.form-select').val() != '') $('.form-select').trigger("change");
        });

        $('.select-layout').click(function() {
            ($(this).val() == 2) ? $('.wp-layout-multiple').show() : $('.wp-layout-multiple').hide();
        });

        $('.form-select').on('change', function() {
            let itemSelected = $(this).val();
            let direction = $(this).data('direction');

            if ($('.select-column-left').val() == $('.select-column-right').val()) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.error('Este item ya se encuentra cargado.');
            } else {
                (itemSelected == 1) ? $('.wp-texto-' + direction).show(): $('.wp-texto-' + direction).hide();
                (itemSelected == 2) ? $('.wp-slider-' + direction).show(): $('.wp-slider-' + direction).hide();
                (itemSelected == 3) ? $('.wp-video-' + direction).show(): $('.wp-video-' + direction).hide();
                (itemSelected == 4) ? $('.wp-documentos-' + direction).show(): $('.wp-documentos-' + direction).hide();
            }
        });

        instanceCkeditor('#texto1');
        instanceCkeditor('#texto2');
        
    </script>
    @endpush
@endsection
