
@extends('layout')

@section('styles')
<link href="{{ asset('css/terminos.css') }}" rel="stylesheet">
@endsection

@section('content')
<body>


    <div class="terms-container">
        <h1>Términos y Condiciones de Frutivegetal</h1>
        
        <section>
            <h2>1. Registro y Cuenta</h2>
            <p>1.1. Para utilizar algunos de los servicios proporcionados por Frutivegetal, es posible que debas registrarte y crear una cuenta. Debes proporcionar información precisa y actualizada durante el proceso de registro.</p>
            <p>1.2. Eres responsable de mantener la confidencialidad de tu contraseña y cuenta, y de todas las actividades que ocurran en tu cuenta. Debes notificarnos de inmediato cualquier uso no autorizado de tu cuenta.</p>
        </section>

        <section>
            <h2>2. Publicación de Productos</h2>
            <p>2.1. Los campesinos pueden publicar sus productos agrícolas y relacionados en el sitio web de Frutivegetal.</p>
            <p>2.2. La información proporcionada en las publicaciones, incluyendo descripciones, imágenes y precios, debe ser precisa y actualizada.</p>
            <p>2.3. No se permiten publicaciones de productos ilegales, fraudulentos, engañosos, peligrosos o que violen derechos de propiedad intelectual de terceros.</p>
        </section>

        <section>
            <h2>3. Compras y Ventas</h2>
            <p>3.1. Las transacciones de compra y venta de productos se realizan entre el campesino vendedor y el comprador. Frutivegetal no es parte de estas transacciones y no asume responsabilidad por ellas.</p>
            <p>3.2. Los usuarios deben comunicarse y acordar los términos de la compra directamente entre ellos.</p>
        </section>

        <section>
            <h2>4. Política de Privacidad</h2>
            <p>4.1. Al utilizar nuestro sitio web, aceptas nuestra Política de Privacidad, que describe cómo recopilamos, usamos y compartimos tus datos personales.</p>
        </section>

        <section>
            <h2>5. Derechos de Propiedad Intelectual</h2>
            <p>5.1. El contenido y diseño del sitio web de Frutivegetal, incluyendo texto, imágenes, logotipos y marcas, están protegidos por derechos de propiedad intelectual. No se permite la reproducción o uso no autorizado de estos materiales.</p>
        </section>

        <section>
            <h2>6. Limitación de Responsabilidad</h2>
            <p>6.1. Frutivegetal no garantiza la veracidad, calidad o seguridad de los productos publicados ni la conducta de los usuarios. Utilizas nuestro sitio web bajo tu propio riesgo.</p>
            <p>6.2. No somos responsables de pérdidas o daños directos, indirectos, incidentales o consecuentes relacionados con el uso de nuestro sitio web.</p>
        </section>

        <section>
            <h2>7. Modificaciones de Términos y Condiciones</h2>
            <p>7.1. Nos reservamos el derecho de modificar estos Términos y Condiciones en cualquier momento. Las modificaciones entrarán en vigencia una vez publicadas en el sitio web.</p>
        </section>

        <section>
            <h2>8. Contacto</h2>
            <p>8.1. Si tienes preguntas o comentarios sobre estos Términos y Condiciones, contáctanos en [tu dirección de contacto].</p>
        </section>
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