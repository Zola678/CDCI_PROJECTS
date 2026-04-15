@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="bg-dark text-white text-center p-5 rounded">
    <h1 class="display-3 fw-bold text-primary">
        Open Box Corporation
    </h1>

    <p class="lead mt-3">
        Agência de Marketing • Design Gráfico • Programação • Edição de Vídeo
    </p>

    <a href="/loogin" class="btn btn-primary btn-lg me-3">
    Login
</a>

<a href="/register-client" class="btn btn-success btn-lg">
    Registrar
</a>
</div>

<!-- SERVIÇOS -->
<div class="mt-5">
    <h2 class="text-center mb-4">Nossos Serviços</h2>

    <div class="row">

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Marketing Digital</h5>
                    <p class="card-text">
                        Estratégias para crescer sua marca online.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Design Gráfico</h5>
                    <p class="card-text">
                        Criação de identidade visual profissional.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Programação</h5>
                    <p class="card-text">
                        Desenvolvimento de sistemas e websites.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Edição de Vídeo</h5>
                    <p class="card-text">
                        Produção e edição profissional de vídeos.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- SOBRE -->
<div class="mt-5 p-4 bg-light rounded">
    <h2 class="text-center mb-3">Sobre Nós</h2>
    <p class="text-center text-muted">
        A Open Box Corporation é uma agência focada em soluções digitais modernas,
        ajudando empresas a crescer através da tecnologia, design e marketing.
    </p>
</div>

@endsection