<nav 
    x-data="{ userMenu: false, mobileMenu: false }"
    class="bg-black text-white border-b border-blue-900/40"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- LOGO -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="font-bold text-blue-400 text-lg">
                    Open Box
                </a>

                <div class="hidden sm:flex space-x-6 ms-10">
                    <a href="{{ route('dashboard') }}" class="hover:text-blue-400">
                        Dashboard
                    </a>

                    <a href="{{ route('welcome') }}" class="hover:text-blue-400">
                        Loja
                    </a>
                </div>
            </div>

            <!-- AUTH -->
            <div class="hidden sm:flex items-center space-x-4">

                @auth
                    <div class="relative">

                        <button 
                            @click="userMenu = !userMenu"
                            class="flex items-center space-x-2 hover:text-blue-400"
                        >
                            <span>{{ Auth::user()->name ?? 'User' }}</span>
                        </button>

                        <!-- DROPDOWN -->
                        <div 
                            x-show="userMenu"
                            @click.away="userMenu = false"
                            x-transition
                            class="absolute right-0 mt-2 w-48 bg-black border border-blue-900 rounded shadow-lg"
                        >

                            <a 
                                href="{{ route('profile.edit') }}"
                                class="block px-4 py-2 hover:bg-blue-900"
                            >
                                Perfil
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="w-full text-left px-4 py-2 text-red-400 hover:bg-blue-900">
                                    Sair
                                </button>
                            </form>

                        </div>

                    </div>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="hover:text-blue-400">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-500">
                        Register
                    </a>
                @endguest

            </div>

            <!-- MOBILE -->
            <div class="sm:hidden">
                <button @click="mobileMenu = !mobileMenu">
                    ☰
                </button>
            </div>

        </div>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="mobileMenu" x-transition class="sm:hidden px-4 pb-4">

        <a href="{{ route('dashboard') }}" class="block py-2">Dashboard</a>
        <a href="{{ route('welcome') }}" class="block py-2">Loja</a>

        @auth
            <a href="{{ route('profile.edit') }}" class="block py-2">Perfil</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-red-400 py-2">Sair</button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="block py-2">Login</a>
            <a href="{{ route('register') }}" class="block py-2">Register</a>
        @endguest

    </div>

</nav>
