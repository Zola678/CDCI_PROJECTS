@extends('layouts.app')

@section('content')

<div class="container py-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h1 class="fw-bold">Painel Admin</h1>
        <p class="text-muted">
            Gestão de clientes e pedidos da Open Box Corporation
        </p>
    </div>

    <!-- GRID -->
    <div class="row g-4">

        @forelse($users as $user)

            <div class="col-md-4">

                <div class="card shadow-sm h-100">

                    <div class="card-body text-center">

                        <!-- AVATAR -->
                        <div class="mb-3">

                            @if($user->image)
                                <img src="{{ asset('storage/' . $user->image) }}"
                                     class="rounded-circle"
                                     width="70"
                                     height="70"
                                     style="object-fit: cover;"
                                     alt="avatar">
                            @else
                                <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center mx-auto"
                                     style="width:70px;height:70px;font-size:22px;">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                            @endif

                        </div>

                        <!-- INFO -->
                        <h5 class="fw-bold mb-1">
                            {{ $user->name }}
                        </h5>

                        <p class="text-muted mb-1">
                            {{ $user->email }}
                        </p>

                        <p class="mt-3">
                            <strong>Pedidos:</strong>
                            {{ $user->request_services_count ?? 0 }}
                        </p>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12 text-center text-muted">
                Nenhum cliente encontrado.
            </div>

        @endforelse

    </div>

</div>

@endsection