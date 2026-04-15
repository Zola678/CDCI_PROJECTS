<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Open Box Corporation</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Open Box</a>

            <div class="ms-auto">
               @guest
                    <a href="/loogin" class="btn btn-outline-light me-2">Login</a>
                    <a href="/register-client" class="btn btn-primary">Registrar</a>
                @endguest

                @auth
                    <a href="/dashboard" class="btn btn-outline-light me-2">Dashboard</a>

                    <form action="/logout" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-danger">Sair</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <!-- HEADER OPCIONAL -->
    @isset($header)
        <div class="bg-light p-4 shadow-sm">
            <div class="container">
                {{ $header }}
            </div>
        </div>
    @endisset

    <!-- CONTEÚDO -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
        © {{ date('Y') }} Open Box Corporation
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>