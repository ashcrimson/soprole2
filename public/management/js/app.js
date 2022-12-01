$(document).ready(function () {

    notifications();
    iniciarCroppie();
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('[name=_token]').value
        }
    });
    
    $('.iconoVerPw').click(function () {
        $(this).toggleClass("bi-eye-slash bi-eye");
        const input = $(this).parent().find("input");
        (input.attr('type') === 'password') ? input.attr('type', 'text') : input.attr('type', 'password')
    });

});

const notifications = () => {

    const message = document.getElementById('msg-notify');
    const type = document.getElementById('type-notify');
    const route = document.getElementById('route-notify');

    if (!message || !type) return;

    alertify.set('notifier', 'position', 'top-right');

    if (type.value == 'success') alertify.success(message.value);
    if (type.value == 'error') alertify.error(message.value);

    if (route.value) setTimeout(() => window.location.href = route.value, 2000);

    message.remove();
    type.remove();
    route.remove();
}


const iniciarCroppie = () => {

    const croppies = document.querySelectorAll('.croppie-image');

    if (croppies.length <= 0) return;

    croppies.forEach((image, index) => {
        const defaul_image = image.closest('.croppie-container').querySelector('.default-image-croppie');
        const min_width = image.getAttribute('data-min-width');
        const min_height = image.getAttribute('data-min-height');

        let crop;
        let razon = 1;

        element = document.querySelectorAll('.imagen-input')[index];
        element && element.addEventListener('change', (event) => {
            const file = event.target.files[0];
            const reader = new FileReader();
            const extensions = ['image/jpg', 'image/jpeg', 'image/png'];

            //validamos las extensiones aceptadas
            if (!extensions.includes(file.type)) {
                event.target.value = '';
                alertify.set('notifier', 'position', 'top-right');
                return alertify.error('La imagen no cumple con el formato.');
            }

            reader.onload = function (e) {

                const newImage = new Image();
                newImage.src = e.target.result;

                newImage.onload = function () {

                    //validamos el tamaño de la imagen
                    if (min_width > this.width || min_height > this.height) {
                        event.target.value = '';
                        alertify.set('notifier', 'position', 'top-right');
                        return alertify.error('La imagen no cumple con el tamaño mínimo.');
                    }

                    if (min_width > 1500) {
                        razon = 4;
                    } else if (min_width >= 500 && min_width < 1500) {
                        razon = 2;
                    }

                    image.classList.remove('d-none');
                    image.classList.add('d-inline-block', 'w-auto');

                    defaul_image.classList.add('d-none');

                    if (crop) crop.destroy();

                    crop = new Croppie(image, {
                        enableExif: true,
                        url: e.target.result,
                        viewport: {
                            width: min_width / razon,
                            height: min_height / razon,
                        },
                        boundary: {
                            width: (min_width / razon) + 30,
                            height: (min_height / razon) + 30
                        }
                    });
                };
            }

            if (file) reader.readAsDataURL(file);
        });

        element = document.querySelectorAll('.cancel-croppie')[index];
        element && element.addEventListener('click', (e) => cancelCroppie(defaul_image, image));

        element = document.querySelectorAll('.add-image-croppie')[index];
        element && element.addEventListener('click', (e) => {

            if (image.classList.contains('d-none')) return;

            const boton = e.currentTarget;
            const isSingleImage = image.classList.contains('single-image');

            crop.result({
                type: 'base64',
                format: 'jpeg|png|jpg',
                quality: 1,
                //size: 'original',
                size: { width: min_width, height: min_height }
            }).then(function (base64) {
                const new_image = document.createElement('img');
                const container = document.createElement('div');
                const input = document.createElement('input');
                const icon = "<button class='btn btn-danger position-absolute delete-image-croppie' type='button' style='right:20px'><i class='fas fa-trash-alt text-white pointer-none'></i></button>";

                new_image.src = base64;
                new_image.classList.add('w-100');

                input.name = "imagenes[]";
                input.type = "hidden";
                input.value = base64;

                container.classList.add('col-sm-6', 'col-md-4', 'pb-5');
                container.append(input);
                container.append(new_image);
                container.innerHTML += icon;


                if (isSingleImage) boton.closest('.croppie-container').querySelector('.images-gallery').innerHTML = container.outerHTML;
                if (!isSingleImage) boton.closest('.croppie-container').querySelector('.images-gallery').append(container);

                boton.closest('.croppie-container').querySelector('.imagen-input').value = '';

                cancelCroppie(defaul_image, image);
            });
        });
    });
}

const sendRequest = (url, form, method = 'POST') => {

    $("#spinner-div").show();

    const data = new FormData(form);

    $.ajax({
        url: url,
        method: method || "GET",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
           
            if (response.status == 419) window.location.href = response.redirect;

            if (response.result) {

                $('.modal').modal('hide');

                if (response.message) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.message);
                }

                if (response.redirect) {
                    setTimeout(function () {
                        window.location.href = response.redirect;
                    }, 300);
                }
                
            } else {
                if (response.message) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error(response.message);
                }
            }

        },
        error: function (response) {

            let res = null;

            if (response.status >= 500) {
                res = response.statusText;
            } else {
                var errors = [];

                if (response.responseJSON.errors) {
                    jQuery.each(response.responseJSON.errors, function (index, item) {
                        errors.push(item);
                    });
                }

                let cadena = errors.join();
                res = cadena.replace(/,/g, '<br>');
            }

            alertify.set('notifier', 'position', 'top-right');
            alertify.error(res);


        },
        complete: function () {
            $("#spinner-div").hide();
        }
    });
}

const eliminar = (route) => {

    alertify.confirm("Desea eliminar este registro?", function () {
        $.ajax({
            url: route,
            type: 'DELETE',
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.result) {
                    // loadTable();
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.message);

                    setTimeout(function () {
                        window.location.href = response.redirect;
                    }, 500);
                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error(response.message);
                }
            }, error: function (xhr, textStatus, error) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.error('Error al eliminar el registro');
            }
        });
    }).set({ title: "Eliminar Registro" }).set({ labels: { ok: 'Aceptar', cancel: 'Cancelar' } });
}

function instanceCkeditor(id) {

    ClassicEditor
        .create(document.querySelector(id), {
            removePlugins: ['MediaEmbed'],
        })
        .catch(error => {
            console.error(error);
        });
}


/**********************************
 * Funciones auxiliares
 *********************************/

 const cancelCroppie = (defaul_image, image) => {
    defaul_image.classList.remove('d-none');
    image.classList.add('d-none');
    image.classList.remove('d-inline-block', 'w-auto');
}