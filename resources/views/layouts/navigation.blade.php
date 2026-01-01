<nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 bg-black/80 backdrop-blur-xl border-b border-yellow-500/20">
    <div class="max-w-[95%] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative flex justify-between items-center h-20">
            
            <div class="shrink-0 flex items-center justify-start">
                <a href="{{ route('home') }}" class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-xl blur-xl opacity-0 group-hover:opacity-40 transition-all duration-500"></div>
                    <x-application-logo class="relative block h-10 w-auto fill-current text-yellow-400 group-hover:text-yellow-300 transition-colors duration-300" />
                </a>
            </div>

            <div class="hidden lg:flex items-center justify-center gap-6 absolute left-1/2 transform -translate-x-1/2">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                    class="relative px-3 py-2 text-sm font-semibold tracking-wide transition-all duration-300
                           {{ request()->routeIs('home') 
                              ? 'text-yellow-400' 
                              : 'text-gray-300 hover:text-yellow-400' }}">
                    {{ __('Home') }}
                    @if(request()->routeIs('home'))
                        <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full"></span>
                    @endif
                </x-nav-link>
                
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')"
                    class="relative px-3 py-2 text-sm font-semibold tracking-wide transition-all duration-300
                           {{ request()->routeIs('about') ? 'text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">
                    {{ __('About') }}
                    @if(request()->routeIs('about')) <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full"></span> @endif
                </x-nav-link>
                
                <x-nav-link :href="route('important-dates')" :active="request()->routeIs('important-dates')"
                    class="relative px-3 py-2 text-sm font-semibold tracking-wide transition-all duration-300
                           {{ request()->routeIs('important-dates') ? 'text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">
                    {{ __('Jadwal') }}
                    @if(request()->routeIs('important-dates')) <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full"></span> @endif
                </x-nav-link>
                
                <x-nav-link :href="route('call-for-paper')" :active="request()->routeIs('call-for-paper')"
                    class="relative px-3 py-2 text-sm font-semibold tracking-wide transition-all duration-300
                           {{ request()->routeIs('call-for-paper') ? 'text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">
                    {{ __('Panduan') }}
                    @if(request()->routeIs('call-for-paper')) <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full"></span> @endif
                </x-nav-link>
                
                <x-nav-link :href="route('submission-info')" :active="request()->routeIs('submission-info')"
                    class="relative px-3 py-2 text-sm font-semibold tracking-wide transition-all duration-300
                           {{ request()->routeIs('submission-info') ? 'text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">
                    {{ __('Informasi') }}
                    @if(request()->routeIs('submission-info')) <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full"></span> @endif
                </x-nav-link>

                @auth
                    <x-nav-link :href="route('registration.create')" :active="request()->routeIs('registration.create')"
                        class="relative px-3 py-2 text-sm font-semibold tracking-wide transition-all duration-300
                               {{ request()->routeIs('registration.create') ? 'text-yellow-400' : 'text-gray-300 hover:text-yellow-400' }}">
                        {{ __('Registrasi Lomba') }}
                        @if(request()->routeIs('registration.create')) <span class="absolute -bottom-1 left-0 right-0 h-0.5 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full"></span> @endif
                    </x-nav-link>
                @endauth
            </div>

            <div class="hidden lg:flex items-center gap-4 justify-end">
                @auth
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('admin.dashboard') }}" 
                           class="group relative inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-xl text-yellow-400 font-bold text-xs tracking-wider uppercase hover:scale-105 transition-all duration-300">
                            Admin Panel
                        </a>
                    @elseif(Auth::user()->role === 2)
                        <a href="{{ route('juri.dashboard') }}" 
                           class="group relative inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-green-500/20 to-green-400/20 backdrop-blur-xl border border-green-500/50 rounded-xl text-green-400 font-bold text-xs tracking-wider uppercase hover:scale-105 transition-all duration-300">
                            Panel Juri
                        </a>
                    @endif

                    <x-dropdown align="right" width="56">
                        <x-slot name="trigger">
                            <button class="group relative inline-flex items-center gap-3 px-3 py-2 bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-xl hover:border-yellow-500/60 transition-all duration-300">
                                @if (Auth::user()->avatar)
                                    <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="Avatar" class="h-8 w-8 rounded-full object-cover ring-2 ring-yellow-500/30">
                                @else
                                    <div class="h-8 w-8 rounded-full bg-gradient-to-br from-gray-800 to-gray-900 ring-2 ring-yellow-500/30 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                                    </div>
                                @endif
                                <span class="text-sm font-semibold text-gray-100 group-hover:text-yellow-400 transition-colors duration-300">
                                    {{ Str::limit(Auth::user()->name, 10) }}
                                </span>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 backdrop-blur-xl rounded-xl overflow-hidden">
                                <x-dropdown-link :href="route('profile.edit')" class="text-gray-300 hover:text-yellow-400">{{ __('Edit Profil') }}</x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-red-400 hover:text-red-300">{{ __('Log Out') }}</x-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-300 hover:text-yellow-400 transition-colors duration-300">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="group relative inline-flex items-center justify-center gap-2 px-5 py-2 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-bold text-sm rounded-xl hover:scale-105 transition-all duration-300">
                            <span>Register</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </a>
                    @endif
                @endauth
            </div>

            <div class="flex items-center lg:hidden">
                <button @click="open = ! open" class="p-2 rounded-xl text-gray-400 hover:text-yellow-400 border border-yellow-500/20">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': !open}" class="hidden lg:hidden border-t border-yellow-500/20 bg-black/95 backdrop-blur-xl">
        <div class="px-4 pt-2 pb-4 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">{{ __('Home') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">{{ __('About') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('important-dates')" :active="request()->routeIs('important-dates')">{{ __('Jadwal') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('call-for-paper')" :active="request()->routeIs('call-for-paper')">{{ __('Panduan') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('submission-info')" :active="request()->routeIs('submission-info')">{{ __('Informasi') }}</x-responsive-nav-link>
            @auth
                <x-responsive-nav-link :href="route('registration.create')" :active="request()->routeIs('registration.create')">{{ __('Registrasi Lomba') }}</x-responsive-nav-link>
                <div class="pt-4 pb-1 border-t border-gray-700">
                    <div class="px-4"><div class="font-medium text-base text-gray-200">{{ Auth::user()->name }}</div></div>
                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">{{ __('Profile') }}</x-responsive-nav-link>
                        <form method="POST" action="{{ route('logout') }}">@csrf<x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-responsive-nav-link></form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>