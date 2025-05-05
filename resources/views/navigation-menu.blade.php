<nav x-data="{ open: false, admOpen: false, eventosOpen: false, universalOpen: false, unpOpen: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex rounded-lg p-2 flex-1 justify-center">
                    <!-- ADM Dropdown -->
                    <div class="relative m-2 pr-6 pl-6 pt-2" x-data="{ open: false }" @click.away="open = false">
                        <x-nav-link href="#" @click.prevent="open = !open"
                            class="rounded-lg text-center flex flex-col justify-end">
                            {{ __(' ADM ') }}
                            <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </x-nav-link>
                        <div x-show="open"
                            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600">
                            <x-dropdown-link href="{{ route('dashboard.unp') }}" :active="request()->routeIs('dashboard.unp')"
                                class="hover:bg-blue-100">{{ __('UNP') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('dashboard.ev') }}" :active="request()->routeIs('dashboard.ev')"
                                class="hover:bg-blue-100">{{ __('Eventos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('dashboard.uni') }}" :active="request()->routeIs('dashboard.uni')"
                                class="hover:bg-blue-100">{{ __('Universal') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('dashboard.adm') }}" :active="request()->routeIs('dashboard.adm')"
                                class="hover:bg-blue-100">{{ __('ADM') }}</x-dropdown-link>
                        </div>
                    </div>

                    <!-- Eventos Dropdown -->
                    <div class="relative m-2 pr-6 pl-6 pt-2" x-data="{ open: false }" @click.away="open = false">
                        <x-nav-link href="#" @click.prevent="open = !open"
                            class="rounded-lg text-center flex flex-col justify-end">
                            {{ __('Eventos') }}
                            <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </x-nav-link>
                        <div x-show="open"
                            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600">
                            <x-dropdown-link href="{{ route('terreiros') }}" :active="request()->routeIs('terreiros')"
                                class="hover:bg-blue-100">{{ __('Terreiros') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('instituicoes') }}" :active="request()->routeIs('instituicoes')"
                                class="hover:bg-blue-100">{{ __('Instituições') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('cestas') }}" :active="request()->routeIs('cestas')"
                                class="hover:bg-blue-100">{{ __('Cestas') }}</x-dropdown-link>
                            <x-responsive-nav-link href="{{ route('entregas') }}" :active="request()->routeIs('entregas')"
                                class="hover:bg-blue-100">{{ __('Distribuição') }}</x-dropdown-link>
                        </div>
                    </div>

                    <!-- Universal Dropdown -->
                    <div class="relative m-2 pr-6 pl-6 pt-2" x-data="{ open: false }" @click.away="open = false">
                        <x-nav-link href="#" @click.prevent="open = !open"
                            class="rounded-lg text-center flex flex-col justify-end">
                            {{ __('Universal') }}
                            <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </x-nav-link>
                        <div x-show="open"
                            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600">
                            <x-dropdown-link href="{{ route('categorias') }}" :active="request()->routeIs('categorias')"
                                class="hover:bg-blue-100">{{ __('Categorias') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('igrejas') }}" :active="request()->routeIs('igrejas')"
                                class="hover:bg-blue-100">{{ __('Igrejas') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('regiaos') }}" :active="request()->routeIs('regiaos')"
                                class="hover:bg-blue-100">{{ __('Regiões') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('blocos') }}" :active="request()->routeIs('blocos')"
                                class="hover:bg-blue-100">{{ __('Blocos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('pastores') }}" :active="request()->routeIs('pastores')"
                                class="hover:bg-blue-100">{{ __('Pastores') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('pessoas') }}" :active="request()->routeIs('pessoas')"
                                class="hover:bg-blue-100">{{ __('Pessoas') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('banners') }}" :active="request()->routeIs('banners')"
                                class="hover:bg-blue-100">{{ __('Banners') }}</x-dropdown-link>
                        </div>
                    </div>

                    <!-- UNP Dropdown -->
                    <div class="relative m-2 pr-6 pl-6 pt-2" x-data="{ open: false }" @click.away="open = false">
                        <x-nav-link href="#" @click.prevent="open = !open"
                            class="rounded-lg text-center flex flex-col justify-end">
                            {{ __('UNP') }}
                            <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </x-nav-link>
                        <div x-show="open"
                            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600">
                            <x-dropdown-link href="{{ route('cursos') }}" :active="request()->routeIs('cursos')"
                                class="hover:bg-blue-100">{{ __('Cursos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('formaturas') }}" :active="request()->routeIs('formaturas')"
                                class="hover:bg-blue-100">{{ __('Formaturas') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('instrutores') }}" :active="request()->routeIs('instrutores')"
                                class="hover:bg-blue-100">{{ __('Instrutores') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('reeducandos') }}" :active="request()->routeIs('reeducandos')"
                                class="hover:bg-blue-100">{{ __('Reeducandos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('cargos') }}" :active="request()->routeIs('cargos')"
                                class="hover:bg-blue-100">{{ __('Cargos') }}</x-dropdown-link>
                            <x-dropdown-link href="{{ route('grupos') }}" :active="request()->routeIs('grupos')"
                                class="hover:bg-blue-100">{{ __('Grupos') }}</x-dropdown-link>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150 hover:bg-blue-100">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                        class="hover:bg-blue-100">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}" class="hover:bg-blue-100">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" class="hover:bg-blue-100" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition hover:bg-blue-100">
                                    <img class="size-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150 hover:bg-blue-100">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}" class="hover:bg-blue-100">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}" class="hover:bg-blue-100">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200 dark:border-gray-600"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                    class="hover:bg-blue-100">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 border rounded-lg p-2 mx-4">
            <!-- ADM Responsive Dropdown -->
            <div x-data="{ open: false }">
                <x-responsive-nav-link href="#" @click.prevent="open = !open"
                    class="hover:bg-blue-100 rounded-lg">
                    {{ __('ADM') }}
                    <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </x-responsive-nav-link>
                <div x-show="open" class="pl-4 space-y-1">
                    <x-responsive-nav-link href="{{ route('dashboard.unp') }}" :active="request()->routeIs('dashboard.unp')"
                        class="hover:bg-blue-100">{{ __('UNP') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('dashboard.ev') }}" :active="request()->routeIs('dashboard.ev')"
                        class="hover:bg-blue-100">{{ __('Eventos') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('dashboard.uni') }}" :active="request()->routeIs('dashboard.uni')"
                        class="hover:bg-blue-100">{{ __('Universal') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('dashboard.adm') }}" :active="request()->routeIs('dashboard.adm')"
                        class="hover:bg-blue-100">{{ __('ADM') }}</x-responsive-nav-link>
                </div>
            </div>

            <!-- Eventos Responsive Dropdown -->
            <div x-data="{ open: false }">
                <x-responsive-nav-link href="#" @click.prevent="open = !open"
                    class="hover:bg-blue-100 rounded-lg">
                    {{ __('Eventos') }}
                    <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 21" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </x-responsive-nav-link>
                <div x-show="open" class="pl-4 space-y-1">
                    <x-responsive-nav-link href="{{ route('terreiros') }}" :active="request()->routeIs('terreiros')"
                        class="hover:bg-blue-100">{{ __('Terreiros') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('instituicoes') }}" :active="request()->routeIs('instituicoes')"
                        class="hover:bg-blue-100">{{ __('Instituições') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('cestas') }}" :active="request()->routeIs('cestas')"
                        class="hover:bg-blue-100">{{ __('Cestas') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('entregas') }}" :active="request()->routeIs('entregas')"
                        class="hover:bg-blue-100">{{ __('Distribuição') }}</x-responsive-nav-link>
                </div>
            </div>

            <!-- Universal Responsive Dropdown -->
            <div x-data="{ open: false }">
                <x-responsive-nav-link href="#" @click.prevent="open = !open"
                    class="hover:bg-blue-100 rounded-lg">
                    {{ __('Universal') }}
                    <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </x-responsive-nav-link>
                <div x-show="open" class="pl-4 space-y-1">
                    <x-responsive-nav-link href="{{ route('igrejas') }}" :active="request()->routeIs('igrejas')"
                        class="hover:bg-blue-100">{{ __('Igrejas') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('regiaos') }}" :active="request()->routeIs('regiaos')"
                        class="hover:bg-blue-100">{{ __('Regiões') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('blocos') }}" :active="request()->routeIs('blocos')"
                        class="hover:bg-blue-100">{{ __('Blocos') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('pastores') }}" :active="request()->routeIs('pastores')"
                        class="hover:bg-blue-100">{{ __('Pastores') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('pessoas') }}" :active="request()->routeIs('pessoas')"
                        class="hover:bg-blue-100">{{ __('Pessoas') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('banners') }}" :active="request()->routeIs('banners')"
                        class="hover:bg-blue-100">{{ __('Banners') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('categorias') }}" :active="request()->routeIs('categorias')"
                        class="hover:bg-blue-100">{{ __('Categorias') }}</x-responsive-nav-link>
                </div>
            </div>

            <!-- UNP Responsive Dropdown -->
            <div x-data="{ open: false }">
                <x-responsive-nav-link href="#" @click.prevent="open = !open"
                    class="hover:bg-blue-100 rounded-lg">
                    {{ __('UNP') }}
                    <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </x-responsive-nav-link>
                <div x-show="open" class="pl-4 space-y-1">
                    <x-responsive-nav-link href="{{ route('cursos') }}" :active="request()->routeIs('cursos')"
                        class="hover:bg-blue-100">{{ __('Cursos') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('formaturas') }}" :active="request()->routeIs('formaturas')"
                        class="hover:bg-blue-100">{{ __('Formaturas') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('instrutores') }}" :active="request()->routeIs('instrutores')"
                        class="hover:bg-blue-100">{{ __('Instrutores') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('reeducandos') }}" :active="request()->routeIs('reeducandos')"
                        class="hover:bg-blue-100">{{ __('Reeducandos') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('grupos') }}" :active="request()->routeIs('grupos')"
                        class="hover:bg-blue-100">{{ __('Grupos') }}</x-responsive-nav-link>
                </div>
            </div>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="size-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}
                    </div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')"
                    class="hover:bg-blue-100">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')"
                        class="hover:bg-blue-100">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                        class="hover:bg-blue-100">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200 dark:border-gray-600"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                        :active="request()->routeIs('teams.show')" class="hover:bg-blue-100">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')"
                            class="hover:bg-blue-100">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link"
                                class="hover:bg-blue-100" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
