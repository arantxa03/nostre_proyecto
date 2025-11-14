<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña - Nostre PQRS</title>

    <link rel="stylesheet" href="{{ asset('css/auth/recuperar-contrasena.css') }}">
</head>
<body>

<div class="auth-container">
    <div class="auth-box">

        <h2>¿Olvidaste tu contraseña?</h2>
        <p class="description">
            No te preocupes, ingresa tu correo y te enviaremos un enlace para restablecer tu contraseña.
        </p>

        <form action="#" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" placeholder="tu-correo@ejemplo.com" required>
            </div>

            <button type="submit" class="btn-submit">Enviar enlace</button>

            <p class="back-login">
                <a href="{{ route('login') }}">← Volver al inicio de sesión</a>
            </p>
        </form>

    </div>
</div>

</body>
</html>
