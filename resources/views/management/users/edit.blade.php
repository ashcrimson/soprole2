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
                <form action="" autocomplete="off">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example1" class="form-control" role="presentation" autocomplete="off" value="{{ old($user->nombre, $user->nombre) }}"/>
                        <label class="form-label" for="form4Example1">Nombre</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form4Example2" class="form-control" role="presentation" autocomplete="off" value="{{ old($user->email, $user->email) }}"/>
                        <label class="form-label" for="form4Example2">Email</label>
                    </div>

                    <div class="loading-buttons">
                        <input type="button" class="btn btn-login btn-danger mx-auto d-block" value="Actualizar" id="btnLogin">
                    </div>

                </form>
            </div>
        </div>

    </div>


    @push('extra-js')
        <script></script>
    @endpush

@endsection
