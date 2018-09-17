<!-- Start Header -->
<div class="allcontain">
    <div class="header">
        <ul class="socialicon">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
        </ul>
        <ul class="givusacall">
            <li>Give us a call : +66666666 </li>
        </ul>
        <ul class="logreg">
            <li><a href="{{ route('login') }}">Iniciar Sesion</a> </li>
            <li><a href="{{ route('cliente.registro') }}"><span class="register">Registro</span></a></li>
        </ul>
    </div>
    <!-- Navbar Up -->
    <nav class="topnavbar navbar-default topnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                    <span class="sr-only"> Toggle navigaion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="#"><img src="image/logo1.png" alt="logo"></a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="upmenu">
            <ul class="nav navbar-nav" id="navbarontop">
                <li class="active"><a href="#">INICIO</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIAS <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdowncostume">
                        <li><a href="#">Enduro</a></li>
                        <li><a href="#">Doble Proposito</a></li>
                        <li><a href="#">Carretera</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEALERS <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdowncostume">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="3">3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">CONTACTO</a>

                </li>
                <button><span class="postnewcar">ANUNCIESE AQUI</span></button>
            </ul>
        </div>
    </nav>
</div>

<!-- End Header -->