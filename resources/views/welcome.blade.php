<x-app-layout>

    <div class="flex items-center justify-center min-h-screen bg-black text-white">

        <div class="text-center space-y-6">

            <h1 class="text-5xl font-bold text-blue-500">
                Open Box Corporation
            </h1>

            <p class="text-lg text-gray-300">
                Agência de Marketing • Design Gráfico • Programação • Edição de Vídeo
            </p>

            <div class="space-x-4">

                <a href="{{ route('login') }}"
                   class="bg-blue-500 px-6 py-2 rounded hover:bg-blue-700">
                    Login
                </a>

                <a href="{{ route('client.create') }}"
                   class="bg-green-500 px-6 py-2 rounded hover:bg-green-700">
                    Registrar
                </a>

            </div>

        </div>

    </div>

</x-app-layout>