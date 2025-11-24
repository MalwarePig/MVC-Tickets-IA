<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="nav-brand">MVC App</a>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="/" class="nav-link">Inicio</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Usuarios ▾</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Listar Usuarios</a>
                        <a href="#" class="dropdown-item">Crear Usuario</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Configuración ▾</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Perfil</a>
                        <a href="#" class="dropdown-item">Ajustes</a>
                        <a href="/login" class="dropdown-item">Cerrar Sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        @yield('content')
    </main>

    <script src="{{ asset('js/layout.js') }}"></script>
</body>

</html>