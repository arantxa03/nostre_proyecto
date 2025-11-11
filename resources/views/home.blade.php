<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Nostre</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar" aria-label="Principal">
            <!-- Logo -->
            <div class="logo">
                <span class="logo-text">Nostre</span>
                <img src="{{ asset('img/Logo-nostre.png') }}" alt="Logo-Corp-Nostre">
            </div> 
  
            <!-- Menú -->
            <ul class="nav-links" role="menubar">
                <li role="none"><a role="menuitem" href="#">Petición</a></li>
                <li role="none"><a role="menuitem" href="#">Queja</a></li>
                <li role="none"><a role="menuitem" href="#">Reclamo</a></li>
                <li role="none"><a role="menuitem" href="#">Sugerencia</a></li>
            </ul>

            <!-- Botones -->
            <div class="nav-buttons">
                <a href="#" class="btn login">Iniciar Sesión</a>
                <a href="#" class="btn register">Registrarse</a>
            </div>

            <!-- Icono hamburguesa para móvil -->
            <div class="hamburger" aria-label="Abrir menú" aria-controls="menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Hero / Banner -->
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1 id="hero-title">PQRS Nostre</h1>
                <p>Gestiona Peticiones, Quejas, Reclamos y Sugerencias de forma rápida, centralizada y trazable.</p>
                <a href="#comenzar" class="btn hero-btn">Comenzar</a>
            </div>
        </div>
    </section>

    <!-- Beneficios / Value Props -->
    <section class="features" aria-labelledby="features-title">
        <div class="container">
            <h2 id="features-title">¿Por qué usar Nostre PQRS?</h2>
            <div class="cards">
                <article class="card" aria-label="Trazabilidad completa">
                    <h3>Trazabilidad completa</h3>
                    <p>Seguimiento del estado en tiempo real, historial y evidencias por caso.</p>
                </article>
                <article class="card" aria-label="Tiempos de respuesta">
                    <h3>Tiempos de respuesta</h3>
                    <p>SLAs configurables y alertas para cumplir con los compromisos.</p>
                </article>
                <article class="card" aria-label="Reportes e insights">
                    <h3>Reportes e insights</h3>
                    <p>Indicadores por tipo de solicitud, área y satisfacción del usuario.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Cómo funciona -->
    <section class="steps" aria-labelledby="steps-title">
        <div class="container">
            <h2 id="steps-title">Cómo funciona</h2>
            <div class="cards">
                <article class="card">
                    <h3>1. Radica</h3>
                    <p>El usuario crea su PQRS con los datos y evidencias necesarias.</p>
                </article>
                <article class="card">
                    <h3>2. Gestiona</h3>
                    <p>Se asigna responsable, se comunica el avance y se registran acciones.</p>
                </article>
                <article class="card">
                    <h3>3. Cierra</h3>
                    <p>Se entrega respuesta formal, se mide la satisfacción y se archiva.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Tipos de Solicitudes (PQRS) -->
    <section class="pqrs-types" aria-labelledby="pqrs-title">
        <div class="container">
            <h2 id="pqrs-title">Tipos de Solicitudes</h2>
            <div class="cards">
                <article class="card"><h3>Petición</h3><p>Solicitud de información o requerimiento específico.</p></article>
                <article class="card"><h3>Queja</h3><p>Inconformidad frente a una situación o servicio.</p></article>
                <article class="card"><h3>Reclamo</h3><p>Exigencia por un derecho vulnerado o incumplimiento.</p></article>
                <article class="card"><h3>Sugerencia</h3><p>Propuesta de mejora para procesos o servicios.</p></article>
            </div>
        </div>
    </section>

    <!-- Preguntas frecuentes -->
    <section class="faq" aria-labelledby="faq-title">
        <div class="container">
            <h2 id="faq-title">Preguntas frecuentes</h2>
            <details>
                <summary>¿Necesito registrarme para radicar una PQRS?</summary>
                <p>Puedes radicar de forma básica sin registro, pero al crear una cuenta tendrás trazabilidad completa.</p>
            </details>
            <details>
                <summary>¿Cómo consulto el estado?</summary>
                <p>Ingresa con tu correo y número de radicado para ver el avance y comunicaciones.</p>
            </details>
            <details>
                <summary>¿Puedo adjuntar evidencias?</summary>
                <p>Sí, soporta imágenes y documentos con límites configurables por la organización.</p>
            </details>
        </div>
    </section>

    <!-- CTA final -->
    <section class="cta" id="comenzar" aria-labelledby="cta-title">
        <div class="container">
            <h2 id="cta-title">Listo para mejorar tu gestión de PQRS</h2>
            <p>Centraliza y agiliza tu atención al usuario con Nostre.</p>
            <a href="#" class="btn register">Crear cuenta</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Nostre. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
