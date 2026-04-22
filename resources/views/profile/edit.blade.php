<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">

            <h2 class="text-xl font-bold text-blue-400">
                OPEN BOX • Perfil do Cliente
            </h2>

            <a href="{{ route('dashboard') }}"
               class="text-sm text-gray-300 hover:text-blue-400 transition">
                Voltar à Loja
            </a>

        </div>
    </x-slot>

    <div class="py-12 bg-black min-h-screen text-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <!-- CARD 1 -->
            <div class="bg-[#0b0f1a] border border-blue-600/30 shadow-lg rounded-2xl p-6 hover:shadow-blue-600/20 transition">

                <div class="mb-4">
                    <h3 class="text-blue-400 font-semibold text-lg">
                        Informações do Perfil
                    </h3>
                    <p class="text-gray-400 text-sm">
                        Atualiza os teus dados da conta Open Box.
                    </p>
                </div>

                @include('profile.partials.update-profile-information-form')

            </div>

            <!-- CARD 2 -->
            <div class="bg-[#0b0f1a] border border-blue-600/30 shadow-lg rounded-2xl p-6 hover:shadow-blue-600/20 transition">

                <div class="mb-4">
                    <h3 class="text-blue-400 font-semibold text-lg">
                        Segurança
                    </h3>
                    <p class="text-gray-400 text-sm">
                        Altera a tua password de acesso.
                    </p>
                </div>

                @include('profile.partials.update-password-form')

            </div>

            <!-- CARD 3 -->
            <div class="bg-red-950/20 border border-red-500/40 shadow-lg rounded-2xl p-6 hover:shadow-red-500/20 transition">

                <div class="mb-4">
                    <h3 class="text-red-400 font-semibold text-lg">
                        Zona de Perigo
                    </h3>
                    <p class="text-gray-400 text-sm">
                        Eliminar conta permanentemente.
                    </p>
                </div>

                @include('profile.partials.delete-user-form')

            </div>

        </div>
    </div>

</x-app-layout>
