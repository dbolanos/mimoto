@extends('layouts.master')
@section('title','Cambiar-contraseña')
@section('contain')

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main_contact_us.css">
    <!--===============================================================================================-->


    <div class="container-contact100">
        <div class="contact100-map" id="contact_us_form" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
        @if($message = Session::get('message'))
            <div class="alert alert-{{$message['type_message']}}" role="alert">
                {!! $message['msg'] !!}
                <button type="button" class="close" data-dismiss="alert" areia-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
        @endif
        <div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url(image/contact_1.png);">
				<span class="contact100-form-title-1">
					Cambiar Contraseña
				</span>

                <span class="contact100-form-title-2">

				</span>
            </div>

            <form method="POST" action="{{ route('update.password') }}" class="contact100-form validate-form form-contact-us">

                <div class="wrap-input100 validate-input">
                    <label for="first_name" class="label-input100">Contraseña Actual:</label>
                    <div class="col-md-6">
                        <input type="text" class="input100 {{ $errors->has('current_password') ? ' is-invalid' : '' }}" id="current_password" name="current_password" placeholder="Contraseña Actual">
                    </div>
                    @if ($errors->has('current_password'))
                        <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('current_password') }}</strong></span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="password" class="label-input100">Nueva Contraseña:</label>
                    <div class="col-md-6">
                        <input type="text" class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Contraseña">
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('password') }}</strong></span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="password_confirmation" class="label-input100">Confirmar Contraseña:</label>
                    <div class="col-md-6">
                        <input type="text" class="input100 " name="password_confirmation" id="password_confirmation" placeholder="Confirmar Contraseña">
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                @csrf

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
						<span>
							Cambiar Contraseña
							<i class="fas fa-unlock-alt"></i>
						</span>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

@endsection
