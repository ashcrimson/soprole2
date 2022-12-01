

// Menu web
$("#btn-menu").click(function(){    
    $(".barra-menu").addClass('right-barra-menu'); 
    $(".flex-barra-menu").css({'display':'block'});
});
$(".btn-cerrar-menu").click(function(){    
    $(".barra-menu").removeClass('right-barra-menu'); 
    $(".flex-barra-menu").css({'display':'none'});
    $(".sub-menu-opciones").removeClass('mostrar-sub-menu-opciones');
    $(".btn-menu-abrir").css({'display':'block'});
    $(".btn-menu-cerrar").css({'display':'none'});
});


// Menu producto detalles
$(".porciones").click(function(){    
    $(".opcion-informacion-n").removeClass('opcion-informacion-seleccionado'); 
    $(".porciones").addClass('opcion-informacion-seleccionado'); 
    $(".opcion-cerrado-porciones").css({'display':'none'});
    $(".opcion-abierto-porciones").css({'display':'block'});
    $(".opcion-cerrado-cantidad-porcion").css({'display':'block'});
    $(".opcion-abierto-cantidad-porcion").css({'display':'none'});
    $(".opcion-cerrado-cantidad-100g").css({'display':'block'});
    $(".opcion-abierto-cantidad-100g").css({'display':'none'});
    $(".tabla").css({'display':'none'});
    $(".tabla-porciones").css({'display':'block'});

});

$(".cantidad-porcion").click(function(){    
    $(".opcion-informacion-n").removeClass('opcion-informacion-seleccionado'); 
    $(".cantidad-porcion").addClass('opcion-informacion-seleccionado'); 

    $(".opcion-cerrado-porciones").css({'display':'block'});
    $(".opcion-abierto-porciones").css({'display':'none'});
    $(".opcion-cerrado-cantidad-porcion").css({'display':'none'});
    $(".opcion-abierto-cantidad-porcion").css({'display':'block'});
    $(".opcion-cerrado-cantidad-100g").css({'display':'block'});
    $(".opcion-abierto-cantidad-100g").css({'display':'none'});
    $(".tabla").css({'display':'none'});
    $(".tabla-cantidad-porcion").css({'display':'block'});
});

$(".cantidad-100g").click(function(){    
    $(".opcion-informacion-n").removeClass('opcion-informacion-seleccionado'); 
    $(".cantidad-100g").addClass('opcion-informacion-seleccionado');

    $(".opcion-cerrado-porciones").css({'display':'block'});
    $(".opcion-abierto-porciones").css({'display':'none'});
    $(".opcion-cerrado-cantidad-porcion").css({'display':'block'});
    $(".opcion-abierto-cantidad-porcion").css({'display':'none'});
    $(".opcion-cerrado-cantidad-100g").css({'display':'none'});
    $(".opcion-abierto-cantidad-100g").css({'display':'block'});
    $(".tabla").css({'display':'none'});
    $(".tabla-cantidad-100g").css({'display':'block'});
});


// Acordeones
$('.opcion-oficinas-n').click(function(event) {
    event.preventDefault();
    $('.ocultar-seccion-oficinas').slideUp();
    $(this).next('.ocultar-seccion-oficinas').slideDown();
});
$(".btn-oficinas").click(function(){    
    $(".opcion-oficinas-n").removeClass('opcion-informacion-seleccionado'); 
    $(".btn-oficinas").addClass('opcion-informacion-seleccionado'); 
    $(".opcion-cerrado-oficinas").css({'display':'none'});
    $(".opcion-abierto-oficinas").css({'display':'block'});
    $(".opcion-cerrado-plantas").css({'display':'block'});
    $(".opcion-abierto-plantas").css({'display':'none'});
});

$(".btn-plantas").click(function(){    
    $(".opcion-oficinas-n").removeClass('opcion-informacion-seleccionado'); 
    $(".btn-plantas").addClass('opcion-informacion-seleccionado'); 
    $(".opcion-cerrado-plantas").css({'display':'none'});
    $(".opcion-abierto-plantas").css({'display':'block'});
    $(".opcion-cerrado-oficinas").css({'display':'block'});
    $(".opcion-abierto-oficinas").css({'display':'none'});
});


var wrapper = $('<div/>').css({height:0,width:0,'overflow':'hidden'});
var fileInput = $(':file').wrap(wrapper);

fileInput.change(function(){
    $this = $(this);
    var path = $this.val();
    path = path.substring(path.lastIndexOf("\\") + 1);
    $('.filebrowser span').text(path);
})

$('.filebrowser').click(function(){
    fileInput.click();
}).show();




// SubMenu
// Nosotros
$(".volver-menu").click(function(){
    $(".sub-menu-opciones").removeClass('mostrar-sub-menu-opciones');
    $(".btn-menu-abrir").css({'display':'block'});
    $(".btn-menu-cerrar").css({'display':'none'});
});

$(".btn-menu-nosotros").click(function(){
    $(".btn-menu-abrir").css({'display':'block'});
    $(".btn-menu-cerrar").css({'display':'none'});
    $(".contenido-sub-menu").css({'display':'none'});

    $(".sub-menu-opciones").addClass('mostrar-sub-menu-opciones');
    $(".sub-menu-nosotros").css({'display':'block'});

    $(".btn-menu-nosotros").css({'display':'none'});
    $(".btn-menu-nosotros-cerrar").css({'display':'block'});
});
$(".btn-menu-nosotros-cerrar").click(function(){
    $(".sub-menu-opciones").removeClass('mostrar-sub-menu-opciones');
    $(".btn-menu-nosotros").css({'display':'block'});
    $(".btn-menu-nosotros-cerrar").css({'display':'none'});
});
// Productos
$(".btn-menu-productos").click(function(){
    $(".btn-menu-abrir").css({'display':'block'});
    $(".btn-menu-cerrar").css({'display':'none'});
    $(".contenido-sub-menu").css({'display':'none'});

    $(".sub-menu-opciones").addClass('mostrar-sub-menu-opciones');
    $(".sub-menu-productos").css({'display':'block'});
    
    $(".btn-menu-productos").css({'display':'none'});
    $(".btn-menu-productos-cerrar").css({'display':'block'});
});
$(".btn-menu-productos-cerrar").click(function(){
    $(".sub-menu-opciones").removeClass('mostrar-sub-menu-opciones');
    $(".btn-menu-productos").css({'display':'block'});
    $(".btn-menu-productos-cerrar").css({'display':'none'});
});
// SPD
$(".btn-menu-spd").click(function(){
    $(".btn-menu-abrir").css({'display':'block'});
    $(".btn-menu-cerrar").css({'display':'none'});
    $(".contenido-sub-menu").css({'display':'none'});

    $(".sub-menu-opciones").addClass('mostrar-sub-menu-opciones');
    $(".sub-menu-spd").css({'display':'block'});
    
    $(".btn-menu-spd").css({'display':'none'});
    $(".btn-menu-spd-cerrar").css({'display':'block'});
});
$(".btn-menu-spd-cerrar").click(function(){
    $(".sub-menu-opciones").removeClass('mostrar-sub-menu-opciones');
    $(".btn-menu-spd").css({'display':'block'});
    $(".btn-menu-spd-cerrar").css({'display':'none'});
});
// Nutriendo sonrisas
$(".btn-menu-sonrisas").click(function(){
    $(".btn-menu-abrir").css({'display':'block'});
    $(".btn-menu-cerrar").css({'display':'none'});
    $(".contenido-sub-menu").css({'display':'none'});

    $(".sub-menu-opciones").addClass('mostrar-sub-menu-opciones');
    $(".sub-menu-sonrisas").css({'display':'block'});
    
    $(".btn-menu-sonrisas").css({'display':'none'});
    $(".btn-menu-sonrisas-cerrar").css({'display':'block'});
});
$(".btn-menu-sonrisas-cerrar").click(function(){
    $(".sub-menu-opciones").removeClass('mostrar-sub-menu-opciones');
    $(".btn-menu-sonrisas").css({'display':'block'});
    $(".btn-menu-sonrisas-cerrar").css({'display':'none'});
});
// Novedades
$(".btn-menu-novedades").click(function(){
    $(".btn-menu-abrir").css({'display':'block'});
    $(".btn-menu-cerrar").css({'display':'none'});
    $(".contenido-sub-menu").css({'display':'none'});

    $(".sub-menu-opciones").addClass('mostrar-sub-menu-opciones');
    $(".sub-menu-novedades").css({'display':'block'});
    
    $(".btn-menu-novedades").css({'display':'none'});
    $(".btn-menu-novedades-cerrar").css({'display':'block'});
});
$(".btn-menu-novedades-cerrar").click(function(){
    $(".sub-menu-opciones").removeClass('mostrar-sub-menu-opciones');
    $(".btn-menu-novedades").css({'display':'block'});
    $(".btn-menu-novedades-cerrar").css({'display':'none'});
});
// Nutriendo sonrisas
$(".btn-menu-contacto").click(function(){
    $(".btn-menu-abrir").css({'display':'block'});
    $(".btn-menu-cerrar").css({'display':'none'});
    $(".contenido-sub-menu").css({'display':'none'});

    $(".sub-menu-opciones").addClass('mostrar-sub-menu-opciones');
    $(".sub-menu-contacto").css({'display':'block'});
    
    $(".btn-menu-contacto").css({'display':'none'});
    $(".btn-menu-contacto-cerrar").css({'display':'block'});
});
$(".btn-menu-contacto-cerrar").click(function(){
    $(".sub-menu-opciones").removeClass('mostrar-sub-menu-opciones');
    $(".btn-menu-contacto").css({'display':'block'});
    $(".btn-menu-contacto-cerrar").css({'display':'none'});
});











// Menu de nosotros escritorio
// $("#proposito-nosotros").click(function(){
//     $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//     $("#proposito-nosotros").addClass('tabla-menu-seleccionado');      
//     $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//     $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//     $(".info-proposito").addClass('mostrar-info');   
// });

// $("#historia-nosotros").click(function(){
//     $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//     $("#historia-nosotros").addClass('tabla-menu-seleccionado');   
//     $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//     $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//     $(".info-historia").addClass('mostrar-info');   
// });

// $("#administracion-nosotros").click(function(){
//     $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//     $("#administracion-nosotros").addClass('tabla-menu-seleccionado');   
//     $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//     $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//     $(".info-administracion").addClass('mostrar-info');   
// });

// $("#emisor-nosotros").click(function(){
//     $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//     $("#emisor-nosotros").addClass('tabla-menu-seleccionado');   
//     $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//     $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//     $(".info-emisor").addClass('mostrar-info');   
// });

// $("#productores-nosotros").click(function(){
//     $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//     $("#productores-nosotros").addClass('tabla-menu-seleccionado');      
//     $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//     $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//     $(".info-productores").addClass('mostrar-info');   
// });

// $("#legal-nosotros").click(function(){
//     $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//     $("#legal-nosotros").addClass('tabla-menu-seleccionado');   
//     $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//     $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//     $(".info-legal").addClass('mostrar-info');   
// });

// // Menu de nosotros movil
// $('#select-nosotros').on('change',function(){
//     var selectValor = $(this).val();
//     //alert (selectValor);

//     if (selectValor == 'op1') {
//         $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//         $("#proposito-nosotros").addClass('tabla-menu-seleccionado');      
//         $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//         $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//         $(".info-proposito").addClass('mostrar-info');    
//     }

//     if (selectValor == 'op2') {
//         $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//         $("#historia-nosotros").addClass('tabla-menu-seleccionado');   
//         $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//         $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//         $(".info-historia").addClass('mostrar-info');         
//     }

//     if (selectValor == 'op3') {
//         $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//         $("#administracion-nosotros").addClass('tabla-menu-seleccionado');   
//         $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//         $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//         $(".info-administracion").addClass('mostrar-info');           
//     }

//     if (selectValor == 'op4') {
//         $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//         $("#emisor-nosotros").addClass('tabla-menu-seleccionado');   
//         $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//         $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//         $(".info-emisor").addClass('mostrar-info');          
//     }

//     if (selectValor == 'op5') {
//         $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//         $("#productores-nosotros").addClass('tabla-menu-seleccionado');      
//         $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//         $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//         $(".info-productores").addClass('mostrar-info');         
//     }

//     if (selectValor == 'op6') {
//         $(".opcion-seleccionada").removeClass('tabla-menu-seleccionado');  
//         $("#legal-nosotros").addClass('tabla-menu-seleccionado');   
//         $(".contenido-mostrar-ocultar").removeClass('mostrar-info');   
//         $(".contenido-mostrar-ocultar").addClass('ocultar-info'); 
//         $(".info-legal").addClass('mostrar-info');         
//     }
// });
