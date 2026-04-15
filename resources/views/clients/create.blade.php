<x-app-layout>

    <div class="max-w-2xl mx-auto p-6">

        <h2 class="text-2xl font-bold mb-6">
            Cadastro de Cliente
        </h2>

        {{-- SUCESSO --}}
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- ERROS --}}
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- FORM --}}
        <form method="POST"
              action="{{ route('client.store') }}"
              enctype="multipart/form-data"
              class="space-y-4">

            @csrf

            <input type="text"
                   name="name"
                   value="{{ old('name') }}"
                   placeholder="Nome completo"
                   required
                   class="w-full border p-2 rounded">

            <input type="email"
                   name="email"
                   value="{{ old('email') }}"
                   placeholder="Email"
                   required
                   class="w-full border p-2 rounded">

            <input type="password"
                   name="password"
                   placeholder="Senha"
                   required
                   class="w-full border p-2 rounded">

            <input type="password"
                   name="password_confirmation"
                   placeholder="Confirmar senha"
                   required
                   class="w-full border p-2 rounded">

            <input type="file"
                   name="image"
                   class="w-full">

            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Criar Cliente
            </button>

        </form>

    </div>

</x-app-layout>