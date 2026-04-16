<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Register - Open Box</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">

    <div class="card shadow p-4" style="width:450px;">

        <h3 class="text-center mb-4">
            Criar Conta - Open Box
        </h3>

        {{-- ERROS --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- NAME --}}
            <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            {{-- EMAIL --}}
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            {{-- PASSWORD --}}
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            {{-- CONFIRM PASSWORD --}}
            <div class="mb-3">
                <label>Confirmar Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100">
                Criar Conta
            </button>

        </form>

        <div class="text-center mt-3">
            <a href="/login">Já tens conta? Login</a>
        </div>

    </div>

</div>

</body>
</html>