<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- IZQUIERDA -->
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <div class="hidden space-x-8 sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>
                </div>
            </div>

            <!-- DERECHA -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                {{-- SOLO SI ESTÁ LOGUEADO --}}
                @auth

                    <!-- Teams -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="ms-3 relative">
                            <x-dropdown align="right" width="60">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 text-sm text-gray-500 bg-white rounded-md">
                                        {{ Auth::user()->currentTeam->name ?? 'Sin equipo' }}
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="w-60">
                                        <div class="px-4 py-2 text-xs text-gray-400">Equipo</div>

                                        <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id ?? 1) }}">
                                            Configuración
                                        </x-dropdown-link>
                                    </div>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endif

                    <!-- Usuario -->
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="48">

                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm rounded-full">
                                        <img class="size-8 rounded-full object-cover"
                                             src="{{ Auth::user()->profile_photo_url }}"
                                             alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <button class="px-3 py-2 text-sm text-gray-500">
                                        {{ Auth::user()->name }}
                                    </button>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <div class="px-4 py-2 text-xs text-gray-400">Cuenta</div>

                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    Perfil
                                </x-dropdown-link>

                                <div class="border-t my-2"></div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Cerrar sesión
                                    </x-dropdown-link>
                                </form>
                            </x-slot>

                        </x-dropdown>
                    </div>

                @endauth

                {{-- SI NO ESTÁ LOGUEADO --}}
                @guest
                    <a href="{{ route('login') }}" class="text-sm text-gray-500">Login</a>
                @endguest

            </div>

            <!-- HAMBURGER -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="p-2 text-gray-400">
                    ☰
                </button>
            </div>
        </div>
    </div>

    <!-- RESPONSIVE -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}">
                Dashboard
            </x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-1 border-t">

            @auth
                <div class="px-4">
                    <div class="text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            Cerrar sesión
                        </x-responsive-nav-link>
                    </form>
                </div>
            @endauth

            @guest
                <div class="px-4">
                    <div class="text-gray-500">Invitado</div>
                    <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                </div>
            @endguest

        </div>
    </div>
</nav>