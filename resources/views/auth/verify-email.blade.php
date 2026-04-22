@extends('layouts.guest')

@section('content')

<div class="w-full max-w-md">

    <!-- Header -->
    <div class="text-center mb-6 animate-fade-in">
        <h1 class="text-3xl font-bold text-blue-500 tracking-wide">
            Open Box Corporation
        </h1>
        <p class="text-gray-400 text-sm mt-2">
            Verificação de Email
        </p>
    </div>

    <!-- Card -->
    <div class="bg-gray-900/70 backdrop-blur-lg border border-blue-900/40 rounded-2xl shadow-2xl p-6">

        <!-- Message -->
        <div class="mb-4 text-sm text-gray-300 leading-relaxed">
            Thanks for signing up! Before getting started, please verify your email address by clicking the link we just sent you.
            If you didn’t receive the email, we can send you another.
        </div>

        <!-- Success -->
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-400 bg-green-900/30 border border-green-600 p-3 rounded-lg animate-pulse">
                A new verification link has been sent to your email address.
            </div>
        @endif

        <!-- Actions -->
        <div class="mt-6 flex flex-col gap-3">

            <!-- Resend -->
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 rounded-lg transition transform hover:scale-[1.02]"
                >
                    Reenviar Email de Verificação
                </button>
            </form>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    type="submit"
                    class="w-full bg-gray-800 hover:bg-gray-700 text-blue-400 border border-blue-800 font-semibold py-2 rounded-lg transition"
                >
                    Terminar Sessão
                </button>
            </form>

        </div>

    </div>
</div>

@endsection

<!-- Animation -->
<style>
    .animate-fade-in {
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
