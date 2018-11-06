@extends('layouts.master')
@section('title','Principal')
@section('contain')

<div class="container">
    <br>

    <form method="POST" action="{{route('generar.anuncio')}}">

        @csrf

        <div class="form-group">
            <label for="ad_title">Titulo del Anuncio:</label>
            <input id="ad_title" name="ad_title" class="form-control" type="text">
        </div>

        <div class="form-group">
            <label for="ad_description">Descripción del Anuncio:</label>
            <textarea name="ad_description" id="ad_description" class="form-control" cols="35" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="ad_brand">Marca:</label>
            <select class="combo-mimoto" id="ad_brand" name="ad_brand">
                <option value="0"> Seleccionar... </option>
                @foreach ($motorcycle_brands as $motorcycle_brand)
                    <option value="{{$motorcycle_brand->id}}"> {{$motorcycle_brand->description}} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ad_category_moto">Categoría:</label>
            <select class="combo-mimoto" id="ad_category_moto" name="ad_category_moto">
                @foreach ($type_motorcycles as $type_motorcycles)
                    <option value="{{$type_motorcycles->id}}"> {{$type_motorcycles->description}} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ad_model_moto">Modelo:</label>
            <select class="combo-mimoto" id="ad_model_moto" name="ad_model_moto">
                <option value="0"> Año </option>
                @for ($i = now()->year + 2; $i > 1950 ; $i--)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="ad_moto_mileage">Kilometraje</label>
            <input id="ad_moto_mileage" name="ad_moto_mileage" type="number" class="form-control">
        </div>

        <div class="form-group ">
            <label for="ad_moto_displacement">Cilindrada</label>
            <input id="ad_moto_displacement" name="ad_moto_displacement" type="number" class="form-control">
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Extras Moto</div>
            <div class="panel-body">
                @foreach($extras_moto as $extra_moto)
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="moto-extra-{{$extra_moto->id}}">
                        <label class="custom-control-label" for="moto-extra-{{$extra_moto->id}}">{{$extra_moto->description}}</label>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="form-group">
            <label for="moto-displacement">Donde se vende la moto?</label>
            <br>
                <label for="province"   >
                    {{ __('Provincia') }}
                </label>
                <div class="">
                    <select id="province" class="combo-mimoto" name="province">
                        @foreach($provinces as $province)
                            <option value="{{ $province->id }}"> {{ $province->name }} </option>
                        @endforeach
                    </select>
                </div>

                <label for="canton" class="">
                    {{ __('Cantón') }}
                </label>
                <div class="">
                    <select id="canton"  class="combo-mimoto" name="canton">
                        @foreach($cantons as $canton)
                            <option value="{{ $canton->id }}"> {{ $canton->name }} </option>
                        @endforeach
                    </select>
                </div>

                <label for="district" class="">
                    {{ __('Distrito') }}
                </label>
                <div class="">
                    <select id="district" class="combo-mimoto" name="district">
                        @foreach($districts as $district)
                            <option value="{{ $district->id }}">
                                {{ $district->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
        </div>

        <div class="form-group">
            <label> Precio colones: </label>
            <div class="input-group col-md-3">
                <span class="input-group-addon" id="input-colons">₡</span>
                <input type="text" id="amount_colones" name="amount_colones" class="form-control" placeholder="" aria-describedby="input-colons">
            </div>
        </div>

        <div class="form-group">
            <label> Precio dolares: </label>
            <div class="input-group col-md-3">
                <span class="input-group-addon" id="input_dollars">$</span>
                <input type="text" id="amount_dollars" name="amount_dollars" class="form-control" placeholder="" aria-describedby="input_dollars">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Aceptar
            </button>
        </div>

    </form>
</div>

{{--Scripts--}}
<script src="{{ asset('js/customerRegister.js') }}" defer></script>

@endsection
