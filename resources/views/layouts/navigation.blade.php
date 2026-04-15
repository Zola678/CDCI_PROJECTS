<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            {{-- LOGO --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>
            </div>

            {{-- LINKS --}}
            <div class="hidden sm:flex sm:space-x-8 sm:items-center">

                @auth
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>

                    <x-nav-link :href="route('requests.index')" :active="request()->routeIs('my-requests')">
                        Meus Pedidos
                    </x-nav-link>

                    <x-nav-link :href="route('admin')" :active="request()->routeIs('admin')">
                        Admin
                    </x-nav-link>
                @endauth

                @guest
                    <x-nav-link :href="route('login')">
                        Login
                    </x-nav-link>

                    <x-nav-link :href="route('client.create')">
                        Registrar
                    </x-nav-link>
                @endguest

            </div>

            {{-- USER MENU --}}
            @auth
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm text-gray-600">
                            <div>{{ Auth::user()->name }}</div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <x-dropdown-link :href="route('profile.edit')">
                            Perfil
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </x-dropdown-link>
                        </form>

                    </x-slot>

                </x-dropdown>

            </div>
            @endauth

            {{-- HAMBURGER --}}
            <div class="sm:hidden flex items-center">
                <button @click="open = !open">
                    ☰
                </button>
            </div>

        </div>
    </div>
</nav>