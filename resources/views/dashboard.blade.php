<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Open Box Corporation - Serviços
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- HEADER --}}
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Nossos Serviços
                </h1>
                <p class="text-gray-600">
                    Escolha um serviço e envie sua solicitação
                </p>
            </div>

            {{-- GRID DE SERVIÇOS --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                @forelse($services as $service)

                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">

                        <h3 class="text-lg font-bold text-gray-900">
                            {{ $service->name }}
                        </h3>

                        <p class="text-gray-600 mt-2">
                            {{ $service->description }}
                        </p>

                        {{-- FORM SOLICITAÇÃO --}}
                        <form method="POST"
                              action="{{ route('request.service', $service->id) }}"
                              class="mt-4">

                            @csrf

                            <button type="submit"
                                class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">

                                + Solicitar Serviço

                            </button>

                        </form>

                    </div>

                @empty

                    <div class="col-span-3 text-center text-gray-500">
                        Nenhum serviço disponível no momento.
                    </div>

                @endforelse

            </div>

        </div>
    </div>

</x-app-layout>