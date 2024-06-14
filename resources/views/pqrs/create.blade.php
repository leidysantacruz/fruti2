@extends('layout')

@section('styles')
<link href="{{ asset('css/inicio6.css') }}" rel="stylesheet">
@endsection

@section('content')
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container-fluid">
    <div class="row">
        <!-- Columna izquierda con la imagen -->
        <div class="col-lg-6 p-0">
            <img src="{{ asset('img/verduras.jpg') }}" alt="Imagen" class="img-fluid">
        </div>
  <!-- Columna derecha con el formulario -->
  <div class="col-lg-6 bg-light">
    <div class="container py-5">
    <h1>Formulario de PQRS</h1>
    <form action="{{ route('pqrs.store') }}" method="post">
        @csrf
        <label for="tipo">Tipo de PQRS:</label>
        <select id="tipo" name="tipo">
            <option value="peticion">Petición</option>
            <option value="queja">Queja</option>
            <option value="reclamo">Reclamo</option>
            <option value="sugerencia">Sugerencia</option>
        </select><br>
    
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="motivo" rows="4" cols="50" required></textarea><br><br>
        <select name="user_id">
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}"> {{ $usuario->id }} {{ $usuario->nombres }}</option>
            @endforeach
        </select>
    
        <input type="submit" value="Enviar PQRS">
    </form>

    <script>
        function validateForm() {
            var tipo = document.getElementById("tipo").value;
            var mensaje = document.getElementById("mensaje").value;
    
            if (tipo === "" || mensaje === "") {
                alert("Por favor, complete todos los campos.");
                return false;
            }
    
            return true;
        }
    </script>

</div>
</div>
</div>
</div>
<br>
<footer>
  
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="wave">
        <path fill="#35ea35" fill-opacity="1" d="M0,224L26.7,218.7C53.3,213,107,203,160,213.3C213.3,224,267,256,320,261.3C373.3,267,427,245,480,218.7C533.3,192,587,160,640,170.7C693.3,181,747,235,800,245.3C853.3,256,907,224,960,192C1013.3,160,1067,128,1120,128C1173.3,128,1227,160,1280,170.7C1333.3,181,1387,171,1413,165.3L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
        <image href="{{ asset('img/logoofi2.png') }}" x="20" y="80" width="300" height="90" />
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
       <a href="#">Política de Privacidad</a>
       <a href="#">Términos y Condiciones</a>
       <a href="#">Protección  Datos Personales</a>
       <img src="{{ asset('img/logoofi.png') }}" alt="Logo Versión" class="footer-logo">
       <span class="version">2023 frutivegetal</span>
    </div>

</footer>
</body>
@endsection
</html>