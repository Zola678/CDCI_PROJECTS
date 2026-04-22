<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Open Box Corporation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-black text-white">

<!-- NAVBAR -->
<nav class="flex justify-between items-center px-10 py-6 border-b border-blue-600/30 bg-black/80 backdrop-blur-md fixed w-full z-50">

    <h1 class="text-xl font-bold text-blue-500">OPEN BOX</h1>

    <div class="space-x-6 text-sm">
        <a href="#home" class="hover:text-blue-400">Home</a>
        <a href="#servicos" class="hover:text-blue-400">Serviços</a>
        <a href="#portfolio" class="hover:text-blue-400">Portfólio</a>
        <a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-300">Login</a>
        <a href="{{ route('register') }}" class="bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-500">Register</a>
    </div>

</nav>

<!-- HERO -->
<section id="home" class="h-screen flex items-center justify-center text-center px-6 bg-gradient-to-b from-black via-black to-blue-950">

    <div class="animate-pulse">

        <h1 class="text-5xl font-bold mb-6">
            Open Box Corporation
        </h1>

        <p class="text-gray-300 max-w-xl mx-auto">
            Uma empresa de multimédia focada em inovação, design, tecnologia e experiências digitais modernas.
        </p>

        <div class="mt-8 space-x-4">
            <a href="{{ route('register') }}" class="bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-500">
                Começar agora
            </a>

            <a href="#servicos" class="border border-blue-600 px-6 py-3 rounded-lg hover:bg-blue-900">
                Ver serviços
            </a>
        </div>

    </div>

</section>

<!-- SERVIÇOS -->
<section id="servicos" class="py-24 px-10 bg-black">

    <h2 class="text-3xl font-bold text-center mb-12 text-blue-400">Serviços</h2>

    <div class="grid md:grid-cols-3 gap-8">

        <div class="p-6 border border-blue-900 rounded-xl hover:scale-105 transition">
            <h3 class="text-xl font-semibold mb-2">Design Multimédia</h3>
            <p class="text-gray-400">Criação de identidades visuais, UI/UX e branding profissional.</p>
        </div>

        <div class="p-6 border border-blue-900 rounded-xl hover:scale-105 transition">
            <h3 class="text-xl font-semibold mb-2">Desenvolvimento Web</h3>
            <p class="text-gray-400">Sistemas modernos com Laravel, APIs e dashboards inteligentes.</p>
        </div>

        <div class="p-6 border border-blue-900 rounded-xl hover:scale-105 transition">
            <h3 class="text-xl font-semibold mb-2">Produção Digital</h3>
            <p class="text-gray-400">Vídeo, áudio e conteúdos criativos para marcas e empresas.</p>
        </div>

    </div>

</section>

<!-- PORTFÓLIO -->
<section id="portfolio" class="py-24 px-10 bg-gradient-to-b from-black to-blue-950">

    <h2 class="text-3xl font-bold text-center mb-12 text-blue-400">Portfólio</h2>

    <div class="text-center text-gray-400">
        Projetos inovadores criados para clientes e sistemas internos da Open Box.
    </div>

</section>

<!-- FOOTER -->
<footer class="text-center py-10 border-t border-blue-900 text-gray-500">
    © {{ date('Y') }} Open Box Corporation — Todos os direitos reservados
</footer>

</body>
</html>
