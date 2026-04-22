<x-app-layout>

    <div class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-blue-950 text-white">

        <!-- HERO -->
        <div class="p-8 text-center border-b border-blue-900/40">
            <h1 class="text-4xl font-bold text-blue-500">
                Open Box Store
            </h1>
            <p class="text-gray-400 mt-2">
                Plataforma de serviços multimídia profissionais
            </p>

            <div class="mt-6 flex justify-center gap-4">
                <a href="#services"
                   class="bg-blue-600 px-5 py-2 rounded-lg hover:bg-blue-500 transition">
                    Explorar Serviços
                </a>

                <a href="#kyc"
                   class="bg-gray-800 border border-blue-700 px-5 py-2 rounded-lg hover:bg-gray-700 transition">
                    Verificar Identidade
                </a>
            </div>
        </div>

        <!-- SERVIÇOS -->
        <div id="services" class="p-8">
            <h2 class="text-2xl font-bold text-blue-400 mb-6">
                Serviços Disponíveis
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <!-- CARD -->
                <div class="bg-gray-900 border border-blue-900/40 p-5 rounded-xl hover:scale-105 transition">
                    <h3 class="text-blue-400 font-bold">Edição de Vídeo</h3>
                    <p class="text-gray-400 text-sm mt-2">
                        Vídeos profissionais para redes sociais e empresas.
                    </p>
                    <button class="mt-4 w-full bg-blue-600 py-2 rounded-lg hover:bg-blue-500">
                        Encomendar
                    </button>
                </div>

                <div class="bg-gray-900 border border-blue-900/40 p-5 rounded-xl hover:scale-105 transition">
                    <h3 class="text-blue-400 font-bold">Design Gráfico</h3>
                    <p class="text-gray-400 text-sm mt-2">
                        Logotipos, banners e identidade visual moderna.
                    </p>
                    <button class="mt-4 w-full bg-blue-600 py-2 rounded-lg hover:bg-blue-500">
                        Encomendar
                    </button>
                </div>

                <div class="bg-gray-900 border border-blue-900/40 p-5 rounded-xl hover:scale-105 transition">
                    <h3 class="text-blue-400 font-bold">Produção Musical</h3>
                    <p class="text-gray-400 text-sm mt-2">
                        Beats, mixagem e masterização profissional.
                    </p>
                    <button class="mt-4 w-full bg-blue-600 py-2 rounded-lg hover:bg-blue-500">
                        Encomendar
                    </button>
                </div>

            </div>
        </div>

        <!-- KYC -->
        <div id="kyc" class="p-8 border-t border-blue-900/40">

            <h2 class="text-2xl font-bold text-blue-400 mb-4">
                Verificação de Identidade
            </h2>

            <div class="bg-gray-900 border border-blue-900/40 p-6 rounded-xl max-w-xl">

                <p class="text-gray-400 text-sm mb-4">
                    Para acessar serviços premium, envie sua documentação.
                </p>

                <input type="file" class="mb-3 w-full text-gray-300">

                <input type="file" class="mb-4 w-full text-gray-300">

                <button class="w-full bg-blue-600 py-2 rounded-lg hover:bg-blue-500">
                    Enviar para verificação
                </button>

                <p class="text-sm text-yellow-400 mt-3">
                    Status: Não verificado
                </p>

            </div>
        </div>

    </div>

</x-app-layout> 
