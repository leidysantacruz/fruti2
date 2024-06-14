
@extends('layout')

@section('styles')
<link href="{{ asset('css/producto1.css') }}" rel="stylesheet">
@endsection

@section('content')
<body>
    

 <!-- Products Start -->
 <div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span style="color:#15c815 ;" >Inorganicos</span></h2>
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
        <text x="300" y="120" font-size="30" font-weight="bold" fill="#000"> Descárgate nuestra app</text>
        <a href="#" x="500" y="120" style="text-decoration: none;">
            <rect x="750" y="100" rx="10" ry="10" width="170" height="50" style="fill:#fcf8f8ea;" />
            <text x="830" y="130" font-size="20" fill="#060606" text-anchor="middle">Descargar ahora</text>
        </a>
    </svg>

    <div class="social-icons">
       
        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
        <a href="#" class="social-icon">
            <img src="{{ asset('img/twitter.jpg') }}" alt="Twitter" class="social-icon-img">
        </a>
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
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
  
</body>
@endsection
</html>


    
    
            
       