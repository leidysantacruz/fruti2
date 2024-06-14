<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>frutivegetal</title>
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
     <link href="{{ asset('css/inicio1.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio3.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio4.css') }}" rel="stylesheet">
     <link href="{{ asset('css/producto1.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-8 mb-1" style="width: 190%; " >
        <div class="row align-items-center">
            <!-- Logotipo  -->
            <div class="col">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logoofi2.png') }}" alt="Logo de Frutivegetal" width="200"> 
                </a>
            </div>
 <!-- buscador -->
            <div class="col">
                <form class="form-inline">
                    <div class="input-group search-input">
                        <input class="form-control border-0" type="search" placeholder="Buscar" aria-label="Buscar">
                        <div class="input-group-append search-icon-container">
                            <span class="input-group-text border-0 search-icon"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col"></div>

            @if (Auth::check())
            <!-- El usuario ha iniciado sesión, no mostrar el botón -->
        @else
            <!-- El usuario no ha iniciado sesión, mostrar el botón -->
            <div class="col-auto">
                <a class="btn btn-iniciar-sesion" href="{{ route('login') }}">Iniciar Sesión</a>
            </div>
        @endif
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-success-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-custom">
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorías
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                            <a class="dropdown-item" href="{{route('inorganico')}}">Inorgánicos</a>
                            <a class="dropdown-item" href="{{route('organico')}}">Orgánicos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contáctenos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pqrsDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            PQRS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pqrsDropdown">
                            <a class="dropdown-item" href="{{route('pqrs.create')}}">Crear PQRS</a>
                            <div class="dropdown-divider"></div> <!-- Separador -->
                            <a class="dropdown-item" href="{{route('ayuda')}}">Servicio de Ayuda</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('nosotros')}}">Nosotros</a>
                    </li>

    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrar 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                            <a class="dropdown-item" href="{{ route('productos.index') }}">crear producto</a>
                            <a class="dropdown-item" href="{{ route('users.index') }}">crear usuario</a>
                            <a class="dropdown-item" href="{{ route('compras.index') }}">crear compras</a>
                            <a class="dropdown-item" href="{{ route('cars.index') }}">carrito_compras</a>
                            <a class="dropdown-item" href="{{ route('mensajes.index') }}">mensajes</a>
                            <a class="dropdown-item" href="{{ route('pagos.index') }}">pagos</a>
                            <a class="dropdown-item" href="{{ route('rols.index') }}">rols</a>
                            <a class="dropdown-item" href="{{ route('pqrs.index') }}">PQRS</a>
                            <a class="dropdown-item" href="{{ route('abastecimientos.index') }}">abastecimientos</a>

                </ul>
            </div> 
            @if (Auth::check())
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle profile-icon" href="#" id="profileDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="color: black; /* o el color que desees */">
                    <img src="{{ asset('img/default_profile_picture.png') }}" alt="Icono de perfil" style="width: 32px; height: auto;">
                    {{ Auth::user()->nombres }}
                </a>
                
                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="{{ route('users.edit', ['user' => Auth::user()]) }}">Actualizar Perfil</a>
                        <a class="dropdown-item" href="{{route('productos.create')}}">Vender Producto</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart" style="color: black; font-size: 20px;"></i> <!-- Icono de carrito de compras -->
                    </a>
                </li>
            @endif
        </div>
    </div>
    </nav>
    
    


   <!-- Carrusel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="2000">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/frutas3.png') }}" alt="Imagen 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/frutas2.jpg') }}" alt="Imagen 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/frutas1.jpg') }}" alt="Imagen 3">
        </div>
    </div>

    <!-- Controles -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
<br>


 <!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span style="color:#15c815 ;">Productos destacados</span></h2>
    <div class="row px-xl-5">
        @foreach ($productos as $producto)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <a href="{{ route('productos.show', $producto->id) }}"> <!-- Enlace al detalle del producto -->
                    <img class="img-fluid product-image" src="{{$producto->imagen}}" alt="">
                    <div class="product-action">
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('productos.show', $producto->id) }}">{{ $producto->nombres }}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>${{ $producto->precio }}</h5><h6 class="text-muted ml-3"><del></del></h6>
                    </div>
                    <a class="btn btn-primary mt-3" href="">añadir a carrito </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



<footer>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="wave">
        <path fill="#35ea35" fill-opacity="1" d="M0,224L26.7,218.7C53.3,213,107,203,160,213.3C213.3,224,267,256,320,261.3C373.3,267,427,245,480,218.7C533.3,192,587,160,640,170.7C693.3,181,747,235,800,245.3C853.3,256,907,224,960,192C1013.3,160,1067,128,1120,128C1173.3,128,1227,160,1280,170.7C1333.3,181,1387,171,1413,165.3L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
        <image href="{{ asset('img/logito.jpg') }}" x="20" y="80" width="300" height="90" />
        <text x="300" y="120" font-size="30" font-weight="bold" fill="#000"> Descárga nuestra app</text>
        <a href="#" x="500" y="120" style="text-decoration: none;">
            <rect x="750" y="100" rx="10" ry="10" width="170" height="50" style="fill:#fcf8f8ea;" />
            <text x="830" y="130" font-size="20" fill="#060606" text-anchor="middle">Descargar ahora</text>
        </a>
    </svg>

    <div class="social-icons">
       
        <a href="https://web.facebook.com/" class="social-icon"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/?logout=1697589605669" class="social-icon">
            <img src="{{ asset('img/twitter.jpg') }}" alt="Twitter" class="social-icon-img">
        </a>
        <a href="https://www.instagram.com/" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
    </div>

   <!-- Agrega la imagen "playstore.png" al frente y en la misma línea de los iconos -->
   <img src="{{ asset('img/playstore.png') }}" alt="Play Store" class="playstore-icon">

   <!-- Línea divisoria -->
   <hr class="footer-divider">

   <!-- Enlaces de políticas y logo con versión en la misma línea -->
   <div class="footer-links">
       <a href="{{ route('politicas') }}">Política de Privacidad</a>
       <a href="{{ route('terminos') }}">Términos y Condiciones</a>
       <a href="{{ route('datospersonales') }}">Protección  Datos Personales</a>
       <img src="{{ asset('img/logoofi.png') }}" alt="Logo Versión" class="footer-logo">
       <span class="version">2023 frutivegetal</span>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/productos.js"></script> <!-- Ruta al archivo JavaScript externo -->

  <!-- Template Javascript -->
  <script src="js/main.js"></script>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      
</body>
</html>