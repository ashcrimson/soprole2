@extends('layouts.management')

@section('title', 'Usuarios')

@section('content')
    <!-- Contenido -->
    <div class="miCuenta">
        <a href="{{ route('administracion.users.index') }}" class="enlace btn btn-primary"><i class="bi bi-arrow-bar-left"></i> volver al listado</a>
        
        <div class="row">
            <div class="col">
                <h1>Usuario</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <!-- Name input -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputName" placeholder="Nombre" value="{{ $user->nombre }}" readonly>
                    <label for="floatingInputName">Nombre</label>
                </div>

                <!-- Email input -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputEmail" placeholder="Nombre" value="{{ $user->email }}" readonly>
                    <label for="floatingInputEmail">Email</label>
                </div>

                <!-- Default switch -->
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" disabled @if ($user->estado) checked @endif/>
                    <label class="form-check-label" for="flexSwitchCheckDefault"> {{ ($user->estado) ? 'Activo' : 'Inactivo'}}</label>
                </div>
            </div>
        </div>

    </div>


    @push('extra-js')
        <script></script>
    @endpush

@endsection
