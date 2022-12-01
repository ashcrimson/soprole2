@extends('layouts.web')

@section('title', 'Inicio')

@section('content')
    
    <div id="contenido-inicio-escritorio" class="contenido-inicio">
        @foreach ($secciones as $seccion)
            <a href="#"><img src="{{ asset($seccion->imagen_web) }}" alt=""></a>
        @endforeach
    </div>    

    <div id="contenido-inicio-movil" class="contenido-inicio">
        @foreach ($secciones as $seccion)
            <a href="#"><img src="{{ asset($seccion->imagen_mobile) }}" alt=""></a>
        @endforeach
    </div>   

    @push('extra-js')
        <script>
        </script>
    @endpush
@endsection