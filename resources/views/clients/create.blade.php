@extends('layouts.app')

@section('content')

<div class="container py-4" style="max-width: 600px;">

    <!-- TÍTULO -->
    <h2 class="fw-bold mb-4">
        Cadastro de Cliente
    </h2>

    <!-- SUCESSO -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
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
    <form method="POST"
          action="{{ route('client.store') }}"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <input type="text"
                   name="name"
                   value="{{ old('name') }}"
                   class="form-control"
                   placeholder="Nome completo"
                   required>
        </div>

        <div class="mb-3">
            <input type="email"
                   name="email"
                   value="{{ old('email') }}"
                   class="form-control"
                   placeholder="Email"
                   required>
        </div>

        <div class="mb-3">
            <input type="password"
                   name="password"
                   class="form-control"
                   placeholder="Senha"
                   required>
        </div>

        <div class="mb-3">
            <input type="password"
                   name="password_confirmation"
                   class="form-control"
                   placeholder="Confirmar senha"
                   required>
        </div>

        <div class="mb-3">
            <input type="file"
                   name="image"
                   class="form-control">
        </div>

        <button type="submit"
                class="btn btn-primary w-100">
            Criar Cliente
        </button>

    </form>

</div>

@endsection