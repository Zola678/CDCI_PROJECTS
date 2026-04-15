<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Meus Pedidos de Serviço
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- TÍTULO --}}
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Meus Pedidos
                </h1>
                <p class="text-gray-600">
                    Aqui estão todos os serviços que você solicitou
                </p>
            </div>

            {{-- LISTA DE PEDIDOS --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                @forelse($requests as $request)

                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">

                        <h3 class="text-lg font-bold text-gray-900">
                            {{ $request->service->name ?? 'Serviço removido' }}
                        </h3>

                        <p class="text-gray-600 mt-2">
                            {{ $request->service->description ?? 'Sem descrição' }}
                        </p>

                        {{-- STATUS (se tiveres campo status) --}}
                        <div class="mt-4">

                            @if(isset($request->status))
                                <span class="px-3 py-1 text-sm rounded-full
                                    @if($request->status == 'pendente') bg-yellow-200 text-yellow-800 @endif
                                    @if($request->status == 'em andamento') bg-blue-200 text-blue-800 @endif
                                    @if($request->status == 'concluido') bg-green-200 text-green-800 @endif
                                ">
                                    {{ ucfirst($request->status) }}
                                </span>
                            @else
                                <span class="text-gray-500 text-sm">
                                    Pendente
                                </span>
                            @endif

                        </div>

                    </div>

                @empty

                    <div class="col-span-3 text-center text-gray-500">
                        Você ainda não fez nenhum pedido de serviço.
                    </div>

                @endforelse

            </div>

        </div>
    </div>

</x-app-layout>