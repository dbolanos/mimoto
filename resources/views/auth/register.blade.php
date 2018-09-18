@extends('layouts.master')
@section('title','Registro')
@section('contain')

    <div class="allcontain">
        <div class="contact">
            <div class="newslettercontent">
                <div class="leftside">

                    <div class="contact-form">
                        <h1>Registro</h1>
                        <div class="form-group group-coustume">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="first_name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text"
                                               class="name-form form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                               name="first_name" value="{{ old('first_name') }}" autofocus>

                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="first_surname"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Primer Apellido') }}</label>

                                    <div class="col-md-6">
                                        <input id="first_surname" type="text"
                                               class="form-control{{ $errors->has('first_surname') ? ' is-invalid' : '' }}"
                                               name="first_surname" value="{{ old('first_surname') }}"
                                               autofocus>

                                        @if ($errors->has('first_surname'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_surname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="second_surname"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Segundo Apellido') }}</label>

                                    <div class="col-md-6">
                                        <input id="second_surname" type="text"
                                               class="form-control{{ $errors->has('second_surname') ? ' is-invalid' : '' }}"
                                               name="second_surname" value="{{ old('second_surname') }}" required
                                               autofocus>

                                        @if ($errors->has('second_surname'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->second('second_surname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control" name="phone"
                                               placeholder="8888-5555" value="" required>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="province" style="color:black"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>

                                    <div class="col-md-6">
                                        <select id="province" style="border: 2px solid #555" class="form-control"
                                                name="province">
                                            @foreach($provinces as $province)
                                                <option value="{{ $province->id }}"> {{ $province->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="canton" style="color:black"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Cantón') }}</label>

                                    <div class="col-md-6">
                                        <select id="canton" style="border: 2px solid #555" class="form-control"
                                                name="canton">
                                            @foreach($cantons as $canton)
                                                <option value="{{ $canton->id }}"> {{ $canton->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="district" style="color:black"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Distrito') }}</label>

                                    <div class="col-md-6">
                                        <select id="district" style="border: 2px solid #555" class="form-control"
                                                name="district">
                                            @foreach($districts as $district)
                                                <option value="{{ $district->id }}"> {{ $district->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address_line"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Otras señas') }}</label>

                                    <div class="col-md-6">
                                        <input id="address_line" type="text" class="form-control" name="address_line">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="{{ asset('js/customerRegister.js') }}" defer></script>

@endsection
