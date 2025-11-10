<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Nostre</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <!-- Logo -->
            <div class="logo">
                <span class="logo-text">Nostre</span>
                <img src="{{ asset('img/Logo-nostre.png') }}" alt="Logo-Corp-Nostre">
            </div> 
  
            <!-- Menú -->
            <ul class="nav-links">
                <li><a href="#">Petición</a></li>
                <li><a href="#">Queja</a></li>
                <li><a href="#">Reclamo</a></li>
                <li><a href="#">Sugerencia</a></li>
            </ul>

            <!-- Botones -->
            <div class="nav-buttons">
                <a href="#" class="btn login">Iniciar Sesión</a>
                <a href="#" class="btn register">Registrarse</a>
            </div>

            <!-- Icono hamburguesa para móvil -->
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Hero / Banner -->
    <section class="hero">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>PQRS Nostre</h1>
                <p>Un sistema fácil y rápido para gestionar Peticiones, Quejas, Reclamos y Sugerencias.</p>
                <a href="#" class="btn hero-btn">Comenzar</a>
            </div>
        </div>
    </section>

<!-- Sección de Eventos Destacados -->
<section class="eventos">
    <h2>Eventos Destacados</h2>
    <div class="cards">
        <div class="card">Evento 1</div>
        <div class="card">Evento 2</div>
        <div class="card">Evento 3</div>
    </div>
</section>


    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Nostre. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
