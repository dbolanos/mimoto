@extends('layouts.master')
@section('title','Registro')
@section('contain')

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main_register.css">
    <!--===============================================================================================-->


    <div class="container-contact100">
        <div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url(image/motor_1.jpg);">
				<span class="contact100-form-title-1">
					Registrarse
				</span>

                <span class="contact100-form-title-2">
					Llena tus datos aqui
				</span>
            </div>

            <form class="contact100-form validate-form form_register" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="wrap-input100 validate-input">
                    <label for="first_name"
                           class="label-input100">{{ __('Nombre') }}</label>

                    <div class="col-md-6">
                        <input id="first_name" type="text"
                               class="input100 {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                               name="first_name" value="{{ old('first_name') }}" autofocus>

                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('first_name') }}</strong>
            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="first_surname"
                           class="label-input100">{{ __('Primer Apellido') }}</label>

                    <div class="col-md-6">
                        <input id="first_surname" type="text"
                               class="input100 {{ $errors->has('first_surname') ? ' is-invalid' : '' }}"
                               name="first_surname" value="{{ old('first_surname') }}"
                               autofocus>

                        @if ($errors->has('first_surname'))
                            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('first_surname') }}</strong>
            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="second_surname"
                           class="label-input100">{{ __('Segundo Apellido') }}</label>

                    <div class="col-md-6">
                        <input id="second_surname" type="text"
                               class="input100 {{ $errors->has('second_surname') ? ' is-invalid' : '' }}"
                               name="second_surname" value="{{ old('second_surname') }}" required
                               autofocus>

                        @if ($errors->has('second_surname'))
                            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->second('second_surname') }}</strong>
            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="email"
                           class="label-input100">{{ __('Correo') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email"
                               class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="phone"
                           class="label-input100">{{ __('Telefono') }}</label>

                    <div class="col-md-6">
                        <input id="phone" type="text" class="input100" name="phone"
                               placeholder="8888-5555" value="" required>

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('phone') }}</strong>
            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="province" style="color:black"
                           class="label-input100">{{ __('Provincia') }}</label>

                    <div class="col-md-6">
                        <select id="province" style="border: 2px solid #555" class="input100"
                                name="province">
                            @foreach($provinces as $province)
                                <option value="{{ $province->id }}"> {{ $province->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="canton" style="color:black"
                           class="label-input100">{{ __('Cantón') }}</label>

                    <div class="col-md-6">
                        <select id="canton" style="border: 2px solid #555" class="input100"
                                name="canton">
                            @foreach($cantons as $canton)
                                <option value="{{ $canton->id }}"> {{ $canton->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="district" style="color:black"
                           class="label-input100">{{ __('Distrito') }}</label>

                    <div class="col-md-6">
                        <select id="district" style="border: 2px solid #555" class="input100"
                                name="district">
                            @foreach($districts as $district)
                                <option value="{{ $district->id }}"> {{ $district->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="address_line"
                           class="label-input100">{{ __('Otras señas') }}</label>

                    <div class="col-md-6">
                        <input id="address_line" type="text" class="input100" name="address_line">
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="password"
                           class="label-input100">{{ __('Contraseña') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                               class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100 validate-input">
                    <label for="password-confirm"
                           class="label-input100">{{ __('Confirmar Contraseña') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="input100"
                               name="password_confirmation" required>
                    </div>
                </div>


                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
						<span>
							Crear Cuenta
							<i class="fas fa-plus"></i>
						</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{--Scripts--}}
    <script src="{{ asset('js/customerRegister.js') }}" defer></script>

@endsection




