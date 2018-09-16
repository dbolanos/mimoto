$(document).ready(function () {

    $('#province').on('click', function () {
        data = {};
        console.log('Checking Canton and District...');
        data.province_id = $('#province').val();

        updateZone(data);
    });

    $('#canton').on('click', function () {
        data = {};
        console.log('Checking Districts...');
        data.canton_id = $('#canton').val();

        updateZone(data);
    });

    function updateZone(data) {
        console.log(data);
        $.ajax({
            //Como se ejecuta un POST necesitamos el token de CSRF, (lo tomamos de un meta que esta en el blade)
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            // En data puedes utilizar un objeto JSON, un array o un query string
            data: data,
            //Cambiar a type: POST si necesario
            type: "GET",
            // Formato de datos que se espera en la respuesta
            dataType: "json",
            // URL a la que se enviará la solicitud Ajax
            url: "get-cantons-districts",
        })
            .done(function (result, textStatus, jqXHR) {
                console.log('Update...');
                if (result['cantons']) {
                    var $select_canton = $("#canton");
                    $select_canton.empty(); // remove old options
                    $.each(result['cantons'], function (key, canton) {
                        $select_canton.append($("<option></option>").attr("value", canton['id']).text(canton['name']));
                    });
                }

                if (result['districts']) {
                    var $select_district = $("#district");
                    $select_district.empty(); // remove old options
                    $.each(result['districts'], function (key, district) {
                        $select_district.append($("<option></option>").attr("value", district['id']).text(district['name']));
                    });
                }

            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log('Request Fail...');
            });
    }

});
