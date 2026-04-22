@extends('layouts.guest')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-black via-gray-900 to-blue-950 px-4">

    <div class="w-full max-w-md">

        <!-- Header -->
        <div class="text-center mb-6 animate-fade-in">
            <h1 class="text-3xl font-bold text-blue-500 tracking-wide">
                Open Box Corporation
            </h1>
            <p class="text-gray-400 text-sm mt-2">
                Acesse sua conta e entre na plataforma
            </p>
        </div>

        <!-- NAV -->
        <div class="flex justify-center gap-3 mb-6">
            <a href="{{ route('login') }}"
               class="px-4 py-2 rounded-lg text-sm font-semibold bg-blue-600 text-white">
                Login
            </a>

            <a href="{{ route('register') }}"
               class="px-4 py-2 rounded-lg text-sm font-semibold bg-gray-800 text-blue-400 border border-blue-700">
                Register
            </a>
        </div>

        <!-- Card -->
        <div class="bg-gray-900/70 backdrop-blur-lg border border-blue-900/40 rounded-2xl shadow-2xl p-6">

            @if ($errors->any())
                <div class="bg-red-900/40 border border-red-500 text-red-300 p-3 rounded-lg mb-4">
                    <ul class="list-disc ml-5 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="text-sm text-gray-300">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full mt-1 bg-black/40 border border-blue-900 text-white rounded-lg px-4 py-2">
                </div>

                <div>
                    <label class="text-sm text-gray-300">Senha</label>
                    <input type="password" name="password" required
                        class="w-full mt-1 bg-black/40 border border-blue-900 text-white rounded-lg px-4 py-2">
                </div>

                <div class="flex justify-between text-sm text-gray-400">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember">
                        Lembrar-me
                    </label>

                    <a href="{{ route('password.request') }}" class="text-blue-400">
                        Esqueceu senha?
                    </a>
                </div>

                <button class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 rounded-lg">
                    Entrar
                </button>

            </form>

            <div class="mt-5 text-center text-sm text-gray-400">
                Ainda não tens conta?
                <a href="{{ route('register') }}" class="text-blue-400">
                    Criar conta
                </a>
            </div>

        </div>

    </div>
</div>

@endsection

<style>
.animate-fade-in {
    animation: fadeIn 0.8s ease-in-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
