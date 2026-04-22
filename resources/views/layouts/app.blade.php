<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Open Box Corporation') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .animate-fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body class="font-sans antialiased bg-gradient-to-br from-black via-gray-900 to-blue-950 text-white">

<div class="min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-gray-900/70 backdrop-blur-lg border-r border-blue-900/40 hidden md:flex flex-col">

        <!-- Logo -->
        <div class="p-5 border-b border-blue-900/40">
            <h1 class="text-xl font-bold text-blue-500">
                Open Box
            </h1>
            <p class="text-xs text-gray-400">Corporation</p>
        </div>

        <!-- Menu -->
        <nav class="flex-1 p-4 space-y-2 text-sm">

            <a href="#"
               class="block px-3 py-2 rounded-lg hover:bg-blue-600/20 hover:text-blue-400 transition">
                Dashboard
            </a>

            <a href="#"
               class="block px-3 py-2 rounded-lg hover:bg-blue-600/20 hover:text-blue-400 transition">
                Utilizadores
            </a>

            <a href="#"
               class="block px-3 py-2 rounded-lg hover:bg-blue-600/20 hover:text-blue-400 transition">
                Projetos
            </a>

            <a href="#"
               class="block px-3 py-2 rounded-lg hover:bg-blue-600/20 hover:text-blue-400 transition">
                Configurações
            </a>

        </nav>

    </aside>

    <!-- MAIN -->
    <div class="flex-1 flex flex-col">

        <!-- TOPBAR -->
        <header class="h-16 bg-gray-900/60 backdrop-blur-lg border-b border-blue-900/40 flex items-center justify-between px-6">

            <h2 class="text-blue-400 font-semibold">
                {{ $header ?? 'Dashboard' }}
            </h2>

            <div class="text-sm text-gray-400">
                {{ auth()->user()->name ?? 'Guest' }}
            </div>

        </header>

        <!-- CONTENT -->
        <main class="p-6 animate-fade-in">
            {{ $slot }}
        </main>

    </div>

</div>

</body>
</html>
