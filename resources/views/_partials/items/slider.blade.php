<div class="form-group">
    <div class="contenedor croppie-container">
        <h3>Galería de imágenes</h3>
        <div class="imagen1"> <span>Galería (tamaño mínimo 520px X 385px)</span>
            <div class="container-content">
                <img class="full default-image-croppie" style="cursor: pointer;" src="{{ asset('management/imagenes/add-new-croppie.png') }}" width="230" />
                <div class="d-none my-4 croppie-image" data-min-width="520" data-min-height="385"></div>
            </div>
            <div class="position-relative">
                <div class="custom-file">
                    <input type="file" class="custom-file-input imagen-input form-control" lang="es" accept=".jpg,.jpeg,.png">
                    <label class="custom-file-label" for="imagen-input">Seleccionar Archivo</label>
                </div>
            </div>
            <div class="modal-footer_imagen" style="text-align:left;margin-top: 15px;">
                <button type="button" class="btn btn-outline-dark cancel-croppie">Cancelar</button>
                <button type="button" class="btn btn-outline-primary add-image-croppie">Agregar</button>
            </div>
            
        </div>
    </div>
</div>


@error('slider')<span class="text-danger">{{ $message }}</span>@enderror
