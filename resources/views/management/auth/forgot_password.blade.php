@extends('layouts.management', ['header' => false])

@section('title', 'Olvidaste contraseña')

@section('content')

    <!-- contenido -->
    <div id="login">
        <figure>
            <a href="{{ route('administracion.login') }}">
                <img src="{{ asset('web/images/logo-soprole.png') }}" class="logo" />
            </a>
        </figure>

        <h2 class="text-center my-2">Actualizar Contraseña</h2>
        
        <form class="form-horizontal my-4" id="forgot_password" action="{{ route('administracion.update.forgot.password') }}">
            @csrf
                <fieldset>
                    <div class="form-floating mb-3">
                        <input type="text" name="email" class="form-control" id="floatingInputEmail" placeholder="Email"  value="{{ $user->email }}" readonly>
                        <label for="floatingInputEmail">Email</label>
                    </div>
                </fieldset>    
                <fieldset>
                    <div class="form-floating mb-3">
                        <input type="password" name="new_password" class="form-control" id="new_password" placeholder="Email">
                        <i class="bi bi-eye iconoVerPw"></i>
                        <label for="new_password">Nueva Contraseña</label>
                    </div>
                </fieldset>

                <fieldset>
                    <div class="form-floating mb-3">
                        <input type="password" name="confirm_new_password" class="form-control" id="confirm_new_password" placeholder="Email">
                        <i class="bi bi-eye iconoVerPw"></i>
                        <label for="confirm_new_password">Confirmación Contraseña</label>
                    </div>
                </fieldset>
                
                <div class="text-center">
                    <ul class="list-rules-password">
                        <li>Tu contraseña debe tener al menos 6 caracteres.</li>
                        <li>Debe contener al menos una letra mayúscula y una minúscula.</li>
                        <li>Debe contener al menos una letra y un número.</li>
                        <li>Debe contener un caracter especial.</li>
                    </ul>
                </div>

                <div class="text-center">
                    <input type="button" class="btn btn-danger mx-auto d-block retrievePassword" value="Actualizar Contraseña">
                </div>
            
        </form>
    </div>

    @push('extra-js')
        <script>
            $(document).ready(function() {

                $('.retrievePassword').click(function(e) {
                    e.preventDefault();
                    const form = document.getElementById("forgot_password");
                    sendRequest(form.action, form);
                });
            });
        </script>
    @endpush

@endsection
