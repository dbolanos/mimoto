@extends('layouts.master')
@section('title','Iniciar Sesión')
@section('contain')

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util_login.css">
    <link rel="stylesheet" type="text/css" href="css/main_login.css">
    <!--===============================================================================================-->
<div class="allcontain">
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(image/login_1.png);">
					<span class="login100-form-title-1">
						Ingresar
					</span>
            </div>


            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Correo</span>
                    <input id="email" type="email" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="correo@ejemplo.com" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Contraseña</span>
                    <input id="password" type="password" class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <div class="form-check">
                        <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="label-checkbox100" for="remember">
                        {{ __('Recordarme') }}
                        </label>
                        </div>
                    </div>

                    <div>
                        <a class="btn txt1" href="{{ route('password.request') }}">
                        {{ __('Olvido su Contraseña?') }}
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Aceptar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
