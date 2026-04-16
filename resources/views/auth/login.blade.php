@extends('layouts.app')

@section('content')

<div class="container py-4" style="max-width: 600px;">

    <!-- TÍTULO -->
    <h2 class="fw-bold mb-4">
        Login - Open Box
    </h2>

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

        <div class="mb-3">
            <input type="email"
                   name="email"
                   value="{{ old('email') }}"
                   class="form-control"
                   placeholder="Email"
                   required
                   autofocus>
        </div>

        <div class="mb-3">
            <input type="password"
                   name="password"
                   class="form-control"
                   placeholder="Password"
                   required>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox"
                   name="remember"
                   class="form-check-input"
                   id="remember">
            <label class="form-check-label" for="remember">
                Remember me
            </label>
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Log in
        </button>

    </form>

</div>

@endsection