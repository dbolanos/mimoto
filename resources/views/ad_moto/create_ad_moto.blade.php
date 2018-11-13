composer @extends('layouts.master')
@section('title','Principal')

@section('customCss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
    <link rel="stylesheet" href="{{ url('/css/ad_moto_create.css') }}">
@endsection

@section('contain')


<div class="container">
    <br>

    {{--Dropzone Preview Template--}}
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <h2 class="page-heading">Agregar Imagenes <span id="counter"></span></h2>
                <form method="post" action="{{ url('/images-save') }}"
                      enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                    {{ csrf_field() }}
                    <div class="dz-message">
                        <div class="col-xs-8">
                            <div class="message">
                                <p>Arrastra tus imagenes aqui o Click aqui para buscar tus imagenes</p>
                            </div>
                        </div>
                    </div>
                    <div class="fallback">
                        <input type="file" name="file" multiple>
                    </div>
                </form>
            </div>
        </div>

        {{--Dropzone Preview Template--}}
        <div id="preview" style="display: none;">

            <div class="dz-preview dz-file-preview">
                <div class="dz-image"><img data-dz-thumbnail /></div>

                <div class="dz-details">
                    <div class="dz-size"><span data-dz-size></span></div>
                    <div class="dz-filename"><span data-dz-name></span></div>
                </div>
                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                <div class="dz-error-message"><span data-dz-errormessage></span></div>



                <div class="dz-success-mark">

                    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                        <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                        <title>Check</title>
                        <desc>Created with Sketch.</desc>
                        <defs></defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                            <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                        </g>
                    </svg>

                </div>
                <div class="dz-error-mark">

                    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                        <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                        <title>error</title>
                        <desc>Created with Sketch.</desc>
                        <defs></defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                            <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        {{--End of Dropzone Preview Template--}}


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
            <label for="ad_category_moto">Tipo Combustible:</label>
            <select class="combo-mimoto" id="ad_type_fuel" name="ad_type_fuel">
                @foreach ($type_fuels as $type_fuel)
                    <option value="{{$type_fuel->id}}"> {{$type_fuel->description}} </option>
                @endforeach
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
                    <div class="form-check">
                        <input
                            class="form-check-input" type="checkbox"
                            name="extras_moto[]"
                            value="{{ $extra_moto->id }}"
                        />
                        <label class="form-check-label">{{ $extra_moto->description }}</label>
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
@section('customScripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <script src="{{ url('/js/dropzone-config.js') }}"></script>
    <script src="{{ asset('js/customerRegister.js') }}" defer></script>
@endsection

@endsection
