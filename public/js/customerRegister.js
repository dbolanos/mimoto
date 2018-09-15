$( document ).ready(function() {

$('#province').on('click', function () {
    console.log('Actualizando Direccion Canton y Distrito...');
    var province    = $('#province').val();
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
            console.log('Funciona 1');
            var $select_canton = $("#canton");
            $select_canton.empty(); // remove old options
            $.each(data['cantons'], function(key,canton) {
                $select_canton.append($("<option></option>").attr("value", canton['id']).text(canton['name']));
            });
            var $select_district = $("#district");
            $select_district.empty(); // remove old options
            $.each(data['districts'], function(key,district) {
                $select_district.append($("<option></option>").attr("value", district['id']).text(district['name']));
            });
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            console.log('NOOO Funciona');
        });
});


    $('#canton').on('click', function () {
        console.log('Actualizando Direccion Distrito...');

        var province             = $('#province').val();
        var canton               = $('#canton').val();
        console.log(province);

        $.ajax({
            //Como se ejecuta un POST necesitamos el token de CSRF, (lo tomamos de un meta que esta en el blade)
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            // En data puedes utilizar un objeto JSON, un array o un query string
            data: {"province_id" : province, "canton_id": canton},
            //Cambiar a type: POST si necesario
            type: "GET",
            // Formato de datos que se espera en la respuesta
            dataType: "json",
            // URL a la que se enviará la solicitud Ajax
            url: "get-cantons-districts",
        })
            .done(function( data, textStatus, jqXHR ) {
                console.log('Funciona 2');
                var $select_district = $("#district");
                $select_district.empty(); // remove old options
                $.each(data['districts'], function(key,district) {
                    $select_district.append($("<option></option>")
                        .attr("value", district['id']).text(district['name']));
                });
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                console.log('NOOO Funciona');
            });
    });

});
