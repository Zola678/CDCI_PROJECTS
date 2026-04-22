@extends('layouts.guest')

@section('content')

<div class="w-full max-w-md">

    <!-- Header -->
    <div class="text-center mb-6 animate-fade-in">
        <h1 class="text-3xl font-bold text-blue-500 tracking-wide">
            Open Box Corporation
        </h1>
        <p class="text-gray-400 text-sm mt-2">
            Redefinir a tua senha de acesso
        </p>
    </div>

    <!-- Card -->
    <div class="bg-gray-900/70 backdrop-blur-lg border border-blue-900/40 rounded-2xl shadow-2xl p-6">

        <!-- Errors -->
        @if ($errors->any())
            <div class="bg-red-900/40 border border-red-500 text-red-300 p-3 rounded-lg mb-4 animate-pulse">
                <ul class="list-disc ml-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
            @csrf

            <!-- Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email -->
            <div>
                <label class="text-sm text-gray-300">Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email', $request->email) }}"
                    required
                    autofocus
                    class="w-full mt-1 bg-black/40 border border-blue-900 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="text-sm text-gray-300">Nova senha</label>
                <input
                    type="password"
                    name="password"
                    required
                    class="w-full mt-1 bg-black/40 border border-blue-900 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                >
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="text-sm text-gray-300">Confirmar senha</label>
                <input
                    type="password"
                    name="password_confirmation"
                    required
                    class="w-full mt-1 bg-black/40 border border-blue-900 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                >
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 rounded-lg transition transform hover:scale-[1.02]"
            >
                Reset Password
            </button>

        </form>

    </div>
</div>

@endsection

<!-- Animation (mesma do login) -->
<style>
    .animate-fade-in {
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
