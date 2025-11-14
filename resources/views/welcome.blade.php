<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Integrador') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: white !important;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        }

        .navbar-brand {
            color: #1a202c !important;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .hero {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1a202c;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: #0f172a;
        }

        .hero p {
            font-size: 1.3rem;
            opacity: 0.7;
            margin-bottom: 40px;
            color: #475569;
        }

        .btn-primary {
            background-color: #2563eb;
            border-color: #2563eb;
            font-weight: 600;
            padding: 0.5rem 1.25rem;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
            border-color: #1d4ed8;
        }

        .btn-outline-primary {
            color: #2563eb;
            border-color: #2563eb;
            font-weight: 600;
        }

        .btn-outline-primary:hover {
            background-color: #2563eb;
            border-color: #2563eb;
            color: white;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="/">📦 Integrador</a>
            <div class="d-flex gap-2">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-primary btn-sm">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">Iniciar Sesión</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Registrarse</a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h1>Bienvenido a Integrador</h1>
            <p>Gestiona tus productos y categorías de forma eficiente</p>
            <p class="small" style="opacity: 0.85;">La plataforma completa para tu negocio</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
