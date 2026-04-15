<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Open Box</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="card shadow p-4" style="width: 420px;">

        <h3 class="text-center mb-4">
            Open Box Login
        </h3>

        <!-- STATUS -->
        @if(session('status'))
            <div class="alert alert-info">
                {{ session('status') }}
            </div>
        @endif

        <!-- ERROS -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- FORM -->
        <form method="POST" action="{{ route('loogin.store') }}">
            @csrf

            <!-- EMAIL -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                       name="email"
                       value="{{ old('email') }}"
                       class="form-control"
                       required
                       autofocus>
            </div>

            <!-- PASSWORD -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       required>
            </div>

            <!-- REMEMBER -->
            <div class="form-check mb-3">
                <input type="checkbox"
                       name="remember"
                       class="form-check-input"
                       id="remember">
                <label class="form-check-label" for="remember">
                    Remember me
                </label>
            </div>

            <!-- BOTÃO -->
            <button type="submit" class="btn btn-primary w-100">
                Log in
            </button>

        </form>

    </div>

</div>

</body>
</html>