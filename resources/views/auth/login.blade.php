<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Nostre-PQRS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
</head>
<body>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            </div>

            <button type="submit" class="btn">Ingresar</button>

            <div class="extra-links">
                <p><a href="#">¿Olvidaste tu contraseña?</a></p>
                <p>¿No tienes cuenta? <a href="#">Regístrate aquí</a></p>
            </div>
        </form>
    </div>

</body>
</html>
