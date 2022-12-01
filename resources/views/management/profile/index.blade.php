@extends('layouts.management')

@section('title', 'Informacion Personal')

@section('content')
    <!-- Contenido -->
    <div class="miCuenta">
        <a href="{{ route('administracion.index') }}" class="enlace btn btn-primary"><i class="bi bi-arrow-bar-left"></i> volver al dashboard</a>
        <h1>Información personal</h1>
        <form id="userForm" action="{{ route('administracion.update.profile', $user) }}" autocomplete="off">
            <div class="grillaInfoPersonal">
                <div>
                    
                    <div class="datoPerfil">
                        <fieldset>
                            <label for="nombre">Nombre</label>
                            <input type="text" value="{{ old($user->nombre, $user->nombre) }}" name="nombre" class="input" onkeypress="return /[a-zA-Z ]/i.test(event.key)" disabled>

                            <div class="my-2">
                                <input type="button" class="btn btnPrimary btn-danger saveInfo" value="Guardar" style="display: none">
                            </div>
                        </fieldset>
                        <a class="enlacePerfil" href="#" data-state="close">Editar</a>
                    </div>

                    <div class="datoPerfil">
                        <fieldset>
                            <label for="">Email</label>
                            <input type="text" value="{{ old($user->email, $user->email) }}" name="email" class="input" disabled>
                        </fieldset>
                    </div>
                    <div class="datoPerfil my-2">
                        <a href="#" data-mdb-toggle="modal" data-mdb-target="#exampleModal"><i class="bi bi-lock-fill"></i> Actualizar contraseña</a>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <!--  PopUp Actualizar contraseña -->
    <div class="modal fade actualizarPass" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar mi contraseña</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="contenedor">
                        <div class="contenido">
                            <form id="form-update-password" action="{{ route('administracion.update.password') }}">
                                @csrf
                                <fieldset>
                                    <label for="current_password">Contraseña actual</label>
                                    <input type="password" name="current_password" id="current_password" autocomplete="current-password">
                                    <i class="bi bi-eye iconoVerPw"></i>
                                    <span class="text-danger p_errores" id="err_current_password"></span>
                                </fieldset>
                                <fieldset>
                                    <label for="new_password">Contraseña nueva</label>
                                    <input type="password" name="new_password" id="new_password" autocomplete="new-password">
                                    <i class="bi bi-eye iconoVerPw"></i>
                                    <span class="text-danger p_errores" id="err_new_password"></span>
                                </fieldset>
                                <fieldset>
                                    <label for="confirm_new_password">Repetir contraseña nueva</label>
                                    <input type="password" name="confirm_new_password" id="confirm_new_password" autocomplete="new-password">
                                    <i class="bi bi-eye iconoVerPw"></i>
                                    <span class="text-danger p_errores" id="err_confirm_new_password"></span>
                                </fieldset>
                            </form>
                            <br>
                            <div style="text-align: center">
                                <ul class="list-rules-password">
                                    <li>Tu contraseña debe tener al menos 6 caracteres.</li>
                                    <li>Debe contener al menos una letra mayúscula y una minúscula.</li>
                                    <li>Debe contener al menos una letra y un número.</li>
                                    <li>Debe contener un caracter especial.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger btnUpdatePassword">Actualizar</button>
                </div>

            </div>
        </div>
    </div>

    @push('extra-js')
        <script>
            $(document).ready(function() {

                $('.enlacePerfil').click(function(e) {

                    e.preventDefault();

                    let state = $(this).data('state');

                    if (state == 'close') {
                        $(this).text('Cancelar');
                        $(this).parent().find('fieldset .input')[0].disabled = false;
                        $(this).parent().find('.saveInfo').show();
                        state = $(this).data('state', 'open');
                    } else {
                        $(this).text('Editar');
                        $(this).parent().find('fieldset .input')[0].disabled = true;
                        $(this).parent().find('.saveInfo').hide();
                        state = $(this).data('state', 'close');
                    }

                });

                $('.saveInfo').click(function(e) {
                    e.preventDefault();
                    const form = document.getElementById("userForm");
                    sendRequest(form.action, form, 'POST', $(this));
                });

                $('.btnUpdatePassword').click(function(e) {
                    e.preventDefault();
                    const form = document.getElementById("form-update-password");
                    sendRequest(form.action, form, 'POST');
                });

            });
        </script>
    @endpush

@endsection
