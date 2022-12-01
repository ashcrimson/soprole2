@extends('layouts.management')

@section('title', 'Usuarios')

@section('content')
    <!-- Contenido -->
    <div class="miCuenta">
        @livewire('user-component')
    </div>

    <!--  Modal Update Password -->
    <div wire:ignore.self class="modal fade actualizarPass" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

@endsection
