@extends('layouts.master')
@section('title','Principal')
@section('contain')

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main_contact_us.css">
    <!--===============================================================================================-->


    <div class="container-contact100">
        <div class="contact100-map" id="contact_us_form" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

        <div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url(image/contact_1.png);">
				<span class="contact100-form-title-1">
					Contactanos
				</span>

                <span class="contact100-form-title-2">
					Se libre de dejarnos unas lineas abajo!
				</span>
            </div>

            <form class="contact100-form validate-form form-contact-us">
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Nombre Completo:</span>
                    <input class="input100" type="text" name="name" placeholder="Nombre...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Correo:</span>
                    <input class="input100" type="text" name="email" placeholder="email@test.com">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <span class="label-input100">Telefono:</span>
                    <input class="input100" type="text" name="phone" placeholder="8888-5555">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <span class="label-input100">Mensaje:</span>
                    <textarea class="input100" name="message" placeholder="Escribe tu comentario..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
						<span>
							Enviar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

@endsection
