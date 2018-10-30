@extends('layouts.master')
@section('title','Principal')
@section('contain')

<div class="container">
    <br>

    <form action="">
        <div class="form-group">
            <label for="ad-title">Titulo del Anuncio:</label>
            <input id="ad-title" class="form-control" type="text">
        </div>

        <div class="form-group">
            <label for="ad-description">Descripción del Anuncio:</label>
            <textarea name="" id="ad-description" class="form-control" cols="35" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="ad-brand">Marca:</label>
            <select class="combo-mimoto" id="ad-Brand">
                <option value="0"> Seleccionar... </option>
                @foreach ($motorcycle_brands as $motorcycle_brand)
                    <option value="{{$motorcycle_brand->id}}"> {{$motorcycle_brand->description}} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="moto-brand">Modelo:</label>
            <select class="combo-mimoto" id="moto-brand">
                <option value="0"> Año </option>
                @for ($i = now()->year + 2; $i > 1950 ; $i--)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="moto-mileage">Kilometraje</label>
            <input id="moto-mileage" type="text" class="form-control">
        </div>




    </form>
</div>

@endsection