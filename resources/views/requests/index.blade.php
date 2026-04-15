@extends('layouts.app')

@section('content')

<div class="container py-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h1 class="fw-bold">Meus Pedidos</h1>
        <p class="text-muted">Aqui estão todos os serviços que você solicitou</p>
    </div>

    <!-- GRID -->
    <div class="row g-4">

        @forelse($requests as $request)

            <div class="col-md-4">

                <div class="card shadow-sm h-100">

                    <div class="card-body">

                        <h5 class="card-title fw-bold">
                            {{ $request->service->name ?? 'Serviço removido' }}
                        </h5>

                        <p class="card-text text-muted">
                            {{ $request->service->description ?? 'Sem descrição' }}
                        </p>

                        <!-- STATUS -->
                        <div class="mt-3">

                            @if(isset($request->status))

                                <span class="badge
                                    @if($request->status == 'pendente') bg-warning text-dark @endif
                                    @if($request->status == 'em andamento') bg-primary @endif
                                    @if($request->status == 'concluido') bg-success @endif
                                ">
                                    {{ ucfirst($request->status) }}
                                </span>

                            @else
                                <span class="text-muted small">
                                    Pendente
                                </span>
                            @endif

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12 text-center text-muted">
                Você ainda não fez nenhum pedido de serviço.
            </div>

        @endforelse

    </div>

</div>

@endsection