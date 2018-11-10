<!-- Start Footer -->
<div class="bottommenu">
    <div class="bottomlogo">
        <span class="dotlogo">&bullet;</span><a href="{{route('index')}}"><img src="image/collectionlogo1.png" alt="logo1"></a><span class="dotlogo">&bullet;</span>
    </div>
    <ul class="nav nav-tabs bottomlinks">
        <li role="presentation" ><a href="#/" role="button">ACERCA DE NOSOTROS</a></li>
        <li role="presentation"><a href="#/">DESTACADOS</a></li>
        <li role="presentation"><a href="{{route('crear.anuncio')}}">ANUNCIARME</a></li>
        <li role="presentation"><a href="#/">ANUNCIOS RECIENTES</a></li>
        <li role="presentation"><a href="#/">BLOG</a></li>
    </ul>
    {{--<p>"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>--}}
        {{--eiusmod tempor incididunt </p>--}}
    <div class="container">
        <div class="media-container-row content">

            <div class="col-md-3 box-ft">
                <p class="title-2-ft">
                    CONTACTENOS
                </p>
                <p class="options-ft">
                    <a href="#" class="options-ft-link">Telefono: 8777-8777</a>
                    <br><a href="{{route('contactenos')}}" class="options-ft-link">Correo: contacto@mimoto.cr</a>
                </p>
            </div>

            <div class="col-md-2 box-ft">
                <p class="title-2-ft">
                    MI CUENTA
                </p>
                <p class="options-ft">
                    <a href="{{ route('login') }}" class="options-ft-link">Inicar Sesión</a>
                    <br><a href="{{ route('cliente.registro') }}" class="options-ft-link">Crear Cuenta</a>
                </p>
            </div>

            <div class="col-md-3 box-ft">
                <p class="title-2-ft">
                    INFORMACIÓN
                </p>
                <p class="options-ft">
                    <a href="#" class="options-ft-link">Ayuda</a>
                    <br><a href="#" class="options-ft-link">Términos y Condiciones</a>
                    <br><a href="#" class="options-ft-link">Soy Nuevo, como empiezo?</a>
                    <br><a href="#" class="options-ft-link">Nuestros Precios</a>
                    <br><a href="#" class="options-ft-link">Articulos</a>
                    <br><a href="#" class="options-ft-link">Unete a nuestras noticias</a>
                </p>
            </div>

        </div>
    </div>
    <img src="image/line.png" alt="line"> <br>
    <div class="bottomsocial">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
    </div>
    <div class="footer">
        <div class="copyright">
            <i class="far fa-copyright"> Copy right {{now()->year}} </i>  | <a href="#"> Privacidad </a> | <a href="#">Politica</a>
        </div>
        <div class="atisda">
            Creado por Dylan Bolaños y Jonathan Arce.
        </div>
    </div>
</div>
<!-- End Footer -->

</div> <!--Close All Contain -->


