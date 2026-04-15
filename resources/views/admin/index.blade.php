<x-app-layout>

    <div class="max-w-6xl mx-auto p-6">

        {{-- HEADER --}}
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Painel Admin
            </h1>

            <p class="text-gray-600">
                Gestão de clientes e pedidos da Open Box Corporation
            </p>
        </div>

        {{-- GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @forelse($users as $user)

                <div class="bg-white shadow rounded-lg p-4">

                    {{-- AVATAR --}}
                    <div class="flex justify-center mb-4">

                        @if($user->image)
                            <img src="{{ asset('storage/' . $user->image) }}"
                                 class="w-16 h-16 rounded-full object-cover"
                                 alt="avatar">
                        @else
                            <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-lg font-bold">
                                {{ strtoupper(substr($user->name, 0, 1)) }}
                            </div>
                        @endif

                    </div>

                    {{-- INFO --}}
                    <div class="text-center space-y-1">

                        <p class="font-semibold text-gray-800">
                            {{ $user->name }}
                        </p>

                        <p class="text-sm text-gray-500">
                            {{ $user->email }}
                        </p>

                        <p class="text-sm text-gray-700 mt-2">
                            <strong>Pedidos:</strong>
                            {{ $user->request_services_count ?? 0 }}
                        </p>

                    </div>

                </div>

            @empty

                <div class="col-span-3 text-center text-gray-500">
                    Nenhum cliente encontrado.
                </div>

            @endforelse

        </div>

    </div>

</x-app-layout>