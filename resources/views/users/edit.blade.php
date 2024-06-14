
@extends('layout')

@section('styles')
    <!-- Agregar estilos específicos para esta vista si es necesario -->
    <link rel="stylesheet" href="{{ asset('css/formularios1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
@endsection

@section('content')
<body>
<br>
    <script>
        function validateForm() {
            var nombres = document.querySelector('input[name="nombres"]').value;
            var apellidos = document.querySelector('input[name="apellidos"]').value;
            var edad = document.querySelector('input[name="edad"]').value;
            var telefono = document.querySelector('input[name="telefono"]').value;
            var email = document.querySelector('input[name="email"]').value;
            var password = document.querySelector('input[name="password"]').value;
    
            if (nombres === "") {
                alert("Por favor, ingrese el nombre.");
                return false;
            }
            if (nombres.length > 30) {
            alert("El nombre no puede tener más de 30 caracteres.");
            return false;
        }
            if (apellidos === "") {
                alert("Por favor, ingrese los apellidos.");
                return false;
            }
            if (edad === "") {
                alert("Por favor, ingrese la edad.");
                return false;
            }
            if (telefono === "") {
                alert("Por favor, ingrese el teléfono.");
                return false;
            }
            if (email === "") {
                alert("Por favor, ingrese el correo electrónico.");
                return false;
            }
            if (password === "") {
                alert("Por favor, ingrese la contraseña.");
                return false;
            }
    
            return true;
        }
    </script>
 <div class="profile-card">
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
        @csrf
        @method('put')

        <div class="profile-picture-section">
            <div class="profile-picture-container">
                <img src="{{ asset('storage/' . $user->profile_picture ?: 'img/default_profile_picture.png') }}" alt="Profile Picture" class="profile-picture">
                <div class="change-photo-icon">
                    <label for="profile_picture">
                        <i class="fas fa-camera"></i>
                    </label>
                    <input type="file" name="profile_picture" id="profile_picture" style="display:none;">
                </div>
            </div>
        </div>

        <div class="form-section">
            <div class="form-group">
                <label for="nombres">Nombre:</label>
                <input type="text" name="nombres" id="nombres" value="{{ $user->nombres }}" autofocus>
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" value="{{ $user->apellidos }}" autofocus>
            </div>

            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="text" name="edad" id="edad" value="{{ $user->edad }}" autofocus>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" value="{{ $user->telefono }}" autofocus>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="{{ $user->email }}" autofocus>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" value="{{ $user->password }}" autofocus>
            </div>

            <div class="form-group">
                <input type="submit" value="Guardar">
            </div>
        </div>
    </form>
</div>

    <br>
    <br>
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


      
</body>
@endsection
</html>



