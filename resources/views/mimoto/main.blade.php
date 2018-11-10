@extends('layouts.master')
@section('title','Principal')

@section('customCss')
<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
@endsection

@section('contain')

    <div id="carousel-up" class="carousel slide" data-ride="carousel">
        <!-- START CAROUSEL BOOTSTRAP SECTION -->
        <div class="carousel-inner " role="listbox">
            <div class="item active">
                <img src="image/oldcar.jpg" alt="oldcar">
                <div class="carousel-caption">
                    <h2>Vende tu Moto</h2>
                    <p>Anuncia tu moto Aqui! ,<br>
                        Y empieza a ganar dinero </p>
                </div>
            </div>
            <div class="item">
                <img src="image/porche.jpg" alt="porche">
                <div class="carousel-caption">
                    <h2>Porche</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                        sed do eiusmod tempor incididunt ut labore </p>
                </div>
            </div>
            <div class="item">
                <img src="image/benz.jpg" alt="benz">
                <div class="carousel-caption">
                    <h2>Busca tu Moto</h2>
                    <p>Compra tu moto! ,<br>
                        Y empieza a viajar! </p>
                </div>
            </div>
        </div>

        <!-- END CAROUSEL BOOTSTRAP SECTION -->

        <nav class="navbar navbar-default midle-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
                    <h1>Buscar</h1>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarmidle">
                <div class="searchtxt">
                    <h1>Busqueda Rápida:</h1>
                </div>

                {{--<div class="form-group">--}}
                {{--<input type="text" class="form-control searchform" placeholder="Enter Keyword">--}}
                {{--</div>--}}


                <ul class="nav navbar-nav navbarborder">

                    <li class="li-category">

                        <select class="combo-mimoto" id="MotoBrand">
                            <option value="0"> MARCA </option>
                            @foreach ($motorcycle_brands as $motorcycle_brand)
                                <option value="{{$motorcycle_brand->id}}"> {{$motorcycle_brand->description}} </option>
                            @endforeach
                        </select>

                    </li>

                    <li class="li-category">
                        {{--<a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                        {{--Categoría--}}
                        {{--<span class="glyphicon glyphicon-chevron-down downicon"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu" id="mydd">--}}
                        {{--@foreach ($type_motorcycles as $type_motorcycles)--}}
                        {{--<option value="{{$type_motorcycles->id}}"> {{$type_motorcycles->description}} </option>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                        <select class="combo-mimoto" id="MotoBrand">
                            <option value="0"> CATEGORÍA </option>
                            @foreach ($type_motorcycles as $type_motorcycles)
                                <option value="{{$type_motorcycles->id}}"> {{$type_motorcycles->description}} </option>
                            @endforeach
                        </select>
                    </li>


                    <li class="li-category">
                        {{--<a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}

                        {{--Año Minimo--}}
                        {{--<span class="glyphicon glyphicon-chevron-down downicon"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu" id="mydd">--}}
                        {{--@for ($i = 1950; $i < now()->year ; $i++)--}}
                        {{--<li><a href="#">{{$i}}</a></li>--}}
                        {{--@endfor--}}
                        {{--</ul>--}}

                        {{--<label for="mydd" class="btn  dropdown-toggle btn-costume" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Año Minimo--}}
                        {{--<span class="glyphicon glyphicon-chevron-down downicon"></span>--}}
                        {{--</label>--}}
                        {{--<select class="form-control dropdown-menu" id="mydd">--}}
                        {{--@for ($i = 1950; $i < now()->year ; $i++)--}}
                        {{--<option>{{$i}}</option>--}}
                        {{--@endfor--}}
                        {{--</select>--}}

                        <select class="combo-mimoto" id="MotoBrand">
                            <option value="0"> AÑO MÍNIMO </option>
                            @for ($i = now()->year; $i > 1949 ; $i--)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </li>

                    <li class="li-category">
                        {{--<a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                        {{--Año Maximo--}}
                        {{--<span class="glyphicon glyphicon-chevron-down downicon"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu" id="mydd">--}}
                        {{--@for ($i = 1951; $i < now()->year + 2 ; $i++)--}}
                        {{--<li><a href="#">{{$i}}</a></li>--}}
                        {{--@endfor--}}
                        {{--</ul>--}}

                        <select class="combo-mimoto" id="MotoBrand">
                            <option value="0"> AÑO MÁXIMO </option>
                            @for ($i = now()->year + 2; $i > 1951 ; $i--)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>

                    </li>

                    <li class="li-slideprice">
                        <p> <label class="slidertxt" for="amount">Precio </label>
                            <input class="priceslider" type="text" id="amount" readonly="readonly">
                        </p>
                        <div id="slider-range"></div>

                    </li>
                    <li class="li-search">
                        <button class="searchbutton"><i class="fas fa-search"></i> Buscar </button>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    </div>
    <!-- End Carousel Section -->
    <!--  Start Featured Section -->
    <div class="allcontain">
        <div class="feturedsection">
            <h1 class="text-center">
                Anuncios Premium
            </h1>
        </div>
        <div class="feturedimage">
            <div class=" firstrow">

                    <div class="py-4">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://www.arpem.com/imagenes/ficha/8/0/0/4/honda-xr-400-r.708004.jpg" alt="Card image cap">
                            <div class="card-note p-1 text-center">
                                <span class="card-note-text">PREMIUM</span>
                            </div>
                            <p class="camera-number"><i class="fa fa-camera" aria-hidden="true"></i> 6</p>
                            <div class="card-body">
                                <h4 class="card-title">Honda <span class="price float-right">¢ 2,475,000</span></h4>
                                <h5 class="card-text">XR | 1999 | 4 Tiempos</h5>
                            </div>
                        </div>
                    </div>

                    <div class="py-4">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://www.arpem.com/imagenes/ficha/8/0/0/4/honda-xr-400-r.708004.jpg" alt="Card image cap">
                            <div class="card-note p-1 text-center">
                                <span class="card-note-text">PREMIUM</span>
                            </div>
                            <p class="camera-number"><i class="fa fa-camera" aria-hidden="true"></i> 6</p>
                            <div class="card-body">
                                <h4 class="card-title">Honda <span class="price float-right">¢ 2,475,000</span></h4>
                                <h5 class="card-text">XR | 1999 | 4 Tiempos</h5>
                            </div>
                        </div>
                    </div>

                    <div class="py-4">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://www.arpem.com/imagenes/ficha/8/0/0/4/honda-xr-400-r.708004.jpg" alt="Card image cap">
                            <div class="card-note p-1 text-center">
                                <span class="card-note-text">PREMIUM</span>
                            </div>
                            <p class="camera-number"><i class="fa fa-camera" aria-hidden="true"></i> 6</p>
                            <div class="card-body">
                                <h4 class="card-title">Honda <span class="price float-right">¢ 2,475,000</span></h4>
                                <h5 class="card-text">XR | 1999 | 4 Tiempos</h5>
                            </div>
                        </div>
                    </div>


                    <div class="py-4">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://www.arpem.com/imagenes/ficha/8/0/0/4/honda-xr-400-r.708004.jpg" alt="Card image cap">
                            <div class="card-note p-1 text-center">
                                <span class="card-note-text">PREMIUM</span>
                            </div>
                            <p class="camera-number"><i class="fa fa-camera" aria-hidden="true"></i> 6</p>
                            <div class="card-body">
                                <h4 class="card-title">Honda <span class="price float-right">¢ 2,475,000</span></h4>
                                <h5 class="card-text">XR | 1999 | 4 Tiempos</h5>
                            </div>
                        </div>
                    </div>


                    <div class="py-4">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://www.arpem.com/imagenes/ficha/8/0/0/4/honda-xr-400-r.708004.jpg" alt="Card image cap">
                            <div class="card-note p-1 text-center">
                                <span class="card-note-text">PREMIUM</span>
                            </div>
                            <p class="camera-number"><i class="fa fa-camera" aria-hidden="true"></i> 6</p>
                            <div class="card-body">
                                <h4 class="card-title">Honda <span class="price float-right">¢ 2,475,000</span></h4>
                                <h5 class="card-text">XR | 1999 | 4 Tiempos</h5>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
        <!-- LATEST MOTOS SECTION -->
        <div class="latestcars">
            <h1 class="text-center">&bullet; LATEST   MOTOS &bullet;</h1>
            <ul class="nav nav-tabs navbar-left latest-navleft">
                <li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
                <li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
                <li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>
                <li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
                <li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>
                <li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>
                <li id="hideonmobile">
            </ul>
        </div>
        <br>
        <br>
        <!-- Latest MOTOS Image Thumbnail -->
        <div class="grid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="image/car1.jpg" alt="car1">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Rolls Royce</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                    sed do eiusmod tempor incididunt" </p>
                                <h4 class="price"> 1000&euro;</h4>
                                <button>READ MORE</button><br>
                                <div class="wishtxt">
                                    <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                    <p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                    <div class="txthover">
                        <img src="image/car2.jpg" alt="car2">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Renault</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                    sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">900 &euro;</h4>
                                <button>READ MORE</button><br>
                                <div class="wishtxt">
                                    <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                    <p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="image/car3.jpg" alt="car3">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Ford Mustang</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                    sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">3000 &euro;</h4>
                                <button>READ MORE</button><br>
                                <div class="wishtxt">
                                    <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                    <p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="image/car4.jpg" alt="car4">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Rover</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                    sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">1000 &euro;</h4>
                                <button>READ MORE</button><br>
                                <div class="wishtxt">
                                    <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                    <p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="image/car5.jpg" alt="car5">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Porche</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                    sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">1200 &euro;</h4>
                                <button>READ MORE</button><br>
                                <div class="wishtxt">
                                    <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                    <p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="image/car6.jpg" alt="car6">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Porche 911</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                    sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">4000 &euro;</h4>
                                <button>READ MORE</button><br>
                                <div class="wishtxt">
                                    <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                    <p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="image/car7.jpg" alt="car7">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Chevrolet SS</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                    sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">3000 &euro;</h4>
                                <button>READ MORE</button><br>
                                <div class="wishtxt">
                                    <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                    <p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="image/car8.jpg" alt="car8">
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Meclaren</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur,<br>
                                    sed do eiusmod tempor incididunt" </p>
                                <h4 class="price">2500 &euro;</h4>
                                <button>READ MORE</button><br>
                                <div class="wishtxt">
                                    <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                    <p class="paragraph2">Compare <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News Letter -->
        <div class="newslettercontent">
            <div class="leftside">
                <img src="image/border.png" alt="border">
                <h1>NEWSLETTER</h1>
                <p>Subscribe to the COLLECTIONCARS mailing list to <br>
                    receive updates on new arrivals, special offers <br>
                    and other discount information.</p>
            </div>
            <div class="rightside">
                <img class="newsimage" src="image/newsletter.jpg" alt="newsletter">
                <input type="text" class="form-control" id="subemail" placeholder="EMAIL">
                <button>SUBSCRIBE</button>
            </div>
        </div>

@endsection

@section('customScripts')
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick-slider-setting.js') }}"></script>
@endsection
