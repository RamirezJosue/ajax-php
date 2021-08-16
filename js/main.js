jQuery(document).on('submit', '#form_insert', function(event) {
    event.preventDefault();
    jQuery.ajax({
        url: 'App/insertar.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize()
    })
    .done(function(respuesta) {
        console.log(respuesta);
        if (!respuesta.error) {
            alert('Los datos se ingresaron con éxito!');
        } else {
            alert('Los datos no se han ingresado :(!')
        }
    })
    .fail(function(resp) {
        console.log(resp.responseText)
    })
    .always(function() {
        console.log("complete")
    })
})