@extends('layouts.app')

@section('content')

<div class="container py-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h1 class="fw-bold">Nossos Serviços</h1>
        <p class="text-muted">Escolha um serviço e envie sua solicitação</p>
    </div>

    <!-- GRID -->
    <div class="row g-4">

        @forelse($services as $service)

            <div class="col-md-4">

                <div class="card shadow-sm h-100">

                    <div class="card-body">

                        <h5 class="card-title fw-bold">
                            {{ $service->name }}
                        </h5>

                        <p class="card-text text-muted">
                            {{ $service->description }}
                        </p>

                        <!-- FORM -->
                        <form method="POST" action="{{ route('request.service', $service->id) }}">
                            @csrf

                            <button type="submit" class="btn btn-primary w-100">
                                + Solicitar Serviço
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12 text-center text-muted">
                Nenhum serviço disponível no momento.
            </div>

        @endforelse

    </div>

</div>

@endsection