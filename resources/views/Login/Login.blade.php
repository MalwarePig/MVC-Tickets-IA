<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="background-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>

    <div class="login-container">
        <div class="login-header">
            <h2>Bienvenido</h2>
            <p>Ingresa tus credenciales para continuar</p>
        </div>
        
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" id="user" name="user" placeholder="Usuario" required>
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>
            
            <button type="submit" class="btn-login">Ingresar</button>
        </form>

        @if(isset($result))
            <div class="result">
                <p>El resultado es: {{ $result }}</p>
            </div>
        @endif

        <div class="login-footer">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
