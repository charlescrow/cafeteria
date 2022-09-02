"use strict"

const toastr = require("toastr");
const ruta = route('ventas.crear');
const formulario = '#formVenta';

$(formulario).validate({
    submitHandler: function(form) {
        guardarVenta(form);
    }
});

const guardarVenta = (form) => {

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
            $('#modalVenta').modal('hide');
            $(formulario).trigger("reset");
            $('.listadoVentas').empty().html(response.data);
            toastr['success'](response.mensaje);
        }
    }).catch(error => console.error(error));;   
}