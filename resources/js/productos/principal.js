"use strict"

const toastr = require("toastr");
const ruta = route('productos.crear');
const formulario = '#formProducto';

$(formulario).validate({
    submitHandler: function(form) {
        guardarProducto(form);
    }
});

const formEditar = '#formEditarProducto';

$(formEditar).validate({
    submitHandler: function(form) {
        actualizarProducto(form);
    }
});

const guardarProducto = (form) => {

    const formData = new FormData(form);

    fetch(ruta, {
        method:'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': window.CSRF_TOKEN
        },
    })
    .then(response => response.json())
    .then(response => {
        if (response.success) {
            $('#modalProducto').modal('hide');
            $(formulario).trigger("reset");
            $('.listadoProductos').empty().html(response.data);
            toastr['success'](response.mensaje);
        }
    }).catch(error => console.error(error));;   
}


const actualizarProducto = (form) => {
    
    const formData = new FormData(form);
    
    const rutaActualizar = route('productos.actualizar');

    fetch(rutaActualizar, {
        method:'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': window.CSRF_TOKEN
        },
    })
    .then(response => response.json())
    .then(response => {
        if (response.success) {
            $('#modalEditarProducto').modal('hide');
            $(formEditar).trigger("reset");
            $('.listadoProductos').empty().html(response.data);
            toastr['success'](response.mensaje);
        }
    }).catch(error => console.error(error));;   
}


$(document).on('click', '.editarProducto', function(){
    const id = $(this).attr('data-editar');
    const rutaEditar = route('productos.editar', {producto : id})
    fetch(rutaEditar, {
        method:'GET',
        headers: {
            'X-CSRF-TOKEN': window.CSRF_TOKEN
        },
    })
    .then(response => response.json())
    .then(response => {
        if (response.success) {
            $('#infoProducto').html(response.data);
            $('#modalEditarProducto').modal('show');
        }
    }).catch(error => console.error(error));;   
});

$(document).on('click', '.eliminarProducto', function(){
    const id = $(this).attr('data-eliminar');
    const rutaEliminar = route('productos.eliminar', {producto : id})
    fetch(rutaEliminar, {
        method:'GET',
        headers: {
            'X-CSRF-TOKEN': window.CSRF_TOKEN
        },
    })
    .then(response => response.json())
    .then(response => {
        if (response.success) {
            toastr['success'](response.mensaje);
            $('.listadoProductos').empty().html(response.data);
        }
    }).catch(error => console.error(error));   
});