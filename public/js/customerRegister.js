$( document ).ready(function() {

$('#province').on('click', function () {
    console.log('Actualizando Direccion...');

    var province             = $('#province').val();
    console.log(province);

            $.ajax({
                //Como se ejecuta un POST necesitamos el token de CSRF, (lo tomamos de un meta que esta en el blade)
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                // En data puedes utilizar un objeto JSON, un array o un query string
                data: {"province_id" : province},
                //Cambiar a type: POST si necesario
                type: "GET",
                // Formato de datos que se espera en la respuesta
                dataType: "json",
                // URL a la que se enviará la solicitud Ajax
                url: "get-cantons-districts",
            })
                .done(function( data, textStatus, jqXHR ) {
                    console.log('Funciona');
                })
                .fail(function( jqXHR, textStatus, errorThrown ) {
                    console.log('NOOO Funciona');
                });



    $('body,html').animate({scrollTop : 0}, 500);
});

});
