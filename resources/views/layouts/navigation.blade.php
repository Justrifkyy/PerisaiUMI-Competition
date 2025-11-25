<nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 bg-black/80 backdrop-blur-xl border-b border-yellow-500/20">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between h-20">
            <div class="flex items-center gap-12">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-xl blur-xl opacity-0 group-hover:opacity-40 transition-all duration-500"></div>
                        <x-application-logo class="relative block h-10 w-auto fill-current text-yellow-400 group-hover:text-yellow-300 transition-colors duration-300" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden lg:flex items-center gap-1">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                        class="relative px-5 py-2.5 text-sm font-semibold tracking-wide transition-all duration-300
                               {{ request()->routeIs('home') 
                                  ? 'text-yellow-400 before:absolute before:bottom-0 before:left-0 before:right-0 before:h-0.5 before:bg-gradient-to-r before:from-yellow-400 before:to-yellow-600' 
                                  : 'text-gray-300 hover:text-yellow-400' }}">
                        {{ __('Home') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')"
                        class="relative px-5 py-2.5 text-sm font-semibold tracking-wide transition-all duration-300
                               {{ request()->routeIs('about') 
                                  ? 'text-yellow-400 before:absolute before:bottom-0 before:left-0 before:right-0 before:h-0.5 before:bg-gradient-to-r before:from-yellow-400 before:to-yellow-600' 
                                  : 'text-gray-300 hover:text-yellow-400' }}">
                        {{ __('About') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('important-dates')" :active="request()->routeIs('important-dates')"
                        class="relative px-5 py-2.5 text-sm font-semibold tracking-wide transition-all duration-300
                               {{ request()->routeIs('important-dates') 
                                  ? 'text-yellow-400 before:absolute before:bottom-0 before:left-0 before:right-0 before:h-0.5 before:bg-gradient-to-r before:from-yellow-400 before:to-yellow-600' 
                                  : 'text-gray-300 hover:text-yellow-400' }}">
                        {{ __('Jadwal') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('call-for-paper')" :active="request()->routeIs('call-for-paper')"
                        class="relative px-5 py-2.5 text-sm font-semibold tracking-wide transition-all duration-300
                               {{ request()->routeIs('call-for-paper') 
                                  ? 'text-yellow-400 before:absolute before:bottom-0 before:left-0 before:right-0 before:h-0.5 before:bg-gradient-to-r before:from-yellow-400 before:to-yellow-600' 
                                  : 'text-gray-300 hover:text-yellow-400' }}">
                        {{ __('Panduan') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('submission-info')" :active="request()->routeIs('submission-info')"
                        class="relative px-5 py-2.5 text-sm font-semibold tracking-wide transition-all duration-300
                               {{ request()->routeIs('submission-info') 
                                  ? 'text-yellow-400 before:absolute before:bottom-0 before:left-0 before:right-0 before:h-0.5 before:bg-gradient-to-r before:from-yellow-400 before:to-yellow-600' 
                                  : 'text-gray-300 hover:text-yellow-400' }}">
                        {{ __('Informasi') }}
                    </x-nav-link>

                    @auth
                        <x-nav-link :href="route('registration.create')" :active="request()->routeIs('registration.create')"
                            class="relative px-5 py-2.5 text-sm font-semibold tracking-wide transition-all duration-300
                                   {{ request()->routeIs('registration.create') 
                                      ? 'text-yellow-400 before:absolute before:bottom-0 before:left-0 before:right-0 before:h-0.5 before:bg-gradient-to-r before:from-yellow-400 before:to-yellow-600' 
                                      : 'text-gray-300 hover:text-yellow-400' }}">
                            {{ __('Registrasi Lomba') }}
                        </x-nav-link>
                    @endauth
                </div>
            </div>

            <!-- Right Side: Auth Section -->
            <div class="hidden lg:flex items-center gap-4">
                @auth
                    <!-- Admin/Juri Panel Buttons -->
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('admin.dashboard') }}" 
                           class="group relative inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-xl text-yellow-400 font-bold text-sm tracking-wider uppercase hover:scale-105 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                            </svg>
                            Admin Panel
                        </a>
                    @elseif(Auth::user()->role === 2)
                        <a href="{{ route('juri.dashboard') }}" 
                           class="group relative inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-green-500/20 to-green-400/20 backdrop-blur-xl border border-green-500/50 rounded-xl text-green-400 font-bold text-sm tracking-wider uppercase hover:scale-105 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Panel Juri
                        </a>
                    @endif

                    <!-- User Dropdown -->
                    <x-dropdown align="right" width="56">
                        <x-slot name="trigger">
                            <button class="group relative inline-flex items-center gap-3 px-4 py-2.5 bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-xl hover:border-yellow-500/60 transition-all duration-300">
                                @if (Auth::user()->avatar)
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full blur-md opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                        <img src="{{ Storage::url(Auth::user()->avatar) }}" 
                                             alt="Avatar" 
                                             class="relative h-9 w-9 rounded-full object-cover ring-2 ring-yellow-500/30 group-hover:ring-yellow-500/60 transition-all duration-300">
                                    </div>
                                @else
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full blur-md opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                                        <div class="relative h-9 w-9 rounded-full bg-gradient-to-br from-gray-800 to-gray-900 ring-2 ring-yellow-500/30 group-hover:ring-yellow-500/60 flex items-center justify-center transition-all duration-300">
                                            <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                @endif
                                
                                <span class="text-sm font-semibold text-gray-100 group-hover:text-yellow-400 transition-colors duration-300">
                                    {{ Str::limit(Auth::user()->name, 15) }}
                                </span>

                                <svg class="h-4 w-4 text-gray-400 group-hover:text-yellow-400 transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 backdrop-blur-xl rounded-xl overflow-hidden">
                                <div class="px-4 py-3 border-b border-yellow-500/10">
                                    <p class="text-xs text-gray-400 uppercase tracking-wider">Account</p>
                                    <p class="text-sm font-semibold text-gray-100 mt-1">{{ Auth::user()->email }}</p>
                                </div>
                                
                                <x-dropdown-link :href="route('profile.edit')"
                                    class="flex items-center gap-3 px-4 py-3 text-sm text-gray-300 hover:text-yellow-400 hover:bg-yellow-500/10 transition-all duration-200">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ __('Edit Profil') }}
                                </x-dropdown-link>
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="flex items-center gap-3 px-4 py-3 text-sm text-red-400 hover:text-red-300 hover:bg-red-500/10 transition-all duration-200 border-t border-yellow-500/10">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                @else
                    <!-- Guest Links -->
                    <a href="{{ route('login') }}" 
                       class="text-sm font-semibold text-gray-300 hover:text-yellow-400 transition-colors duration-300">
                        Log in
                    </a>
                    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="group relative inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-bold text-sm rounded-xl hover:scale-105 transition-all duration-300 overflow-hidden">
                            <span class="relative z-10">Register</span>
                            <svg class="relative z-10 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                    @endif
                @endauth
            </div>

            <!-- Mobile Hamburger -->
            <div class="flex items-center lg:hidden">
                <button @click="open = ! open" 
                        class="relative inline-flex items-center justify-center p-2.5 rounded-xl text-gray-400 hover:text-yellow-400 hover:bg-yellow-500/10 border border-yellow-500/20 hover:border-yellow-500/50 transition-all duration-300">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" 
                              class="inline-flex" 
                              stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="2" 
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': !open, 'inline-flex': open}" 
                              class="hidden" 
                              stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="2" 
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': !open}" 
         class="hidden lg:hidden border-t border-yellow-500/20 bg-black/95 backdrop-blur-xl">
        <div class="px-6 pt-4 pb-6 space-y-2">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-300
                       {{ request()->routeIs('home') 
                          ? 'bg-yellow-500/20 text-yellow-400 border border-yellow-500/50' 
                          : 'text-gray-300 hover:text-yellow-400 hover:bg-yellow-500/10' }}">
                {{ __('Home') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-300
                       {{ request()->routeIs('about') 
                          ? 'bg-yellow-500/20 text-yellow-400 border border-yellow-500/50' 
                          : 'text-gray-300 hover:text-yellow-400 hover:bg-yellow-500/10' }}">
                {{ __('About') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('important-dates')" :active="request()->routeIs('important-dates')"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-300
                       {{ request()->routeIs('important-dates') 
                          ? 'bg-yellow-500/20 text-yellow-400 border border-yellow-500/50' 
                          : 'text-gray-300 hover:text-yellow-400 hover:bg-yellow-500/10' }}">
                {{ __('Jadwal') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('call-for-paper')" :active="request()->routeIs('call-for-paper')"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-300
                       {{ request()->routeIs('call-for-paper') 
                          ? 'bg-yellow-500/20 text-yellow-400 border border-yellow-500/50' 
                          : 'text-gray-300 hover:text-yellow-400 hover:bg-yellow-500/10' }}">
                {{ __('Panduan') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('submission-info')" :active="request()->routeIs('submission-info')"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-300
                       {{ request()->routeIs('submission-info') 
                          ? 'bg-yellow-500/20 text-yellow-400 border border-yellow-500/50' 
                          : 'text-gray-300 hover:text-yellow-400 hover:bg-yellow-500/10' }}">
                {{ __('Informasi') }}
            </x-responsive-nav-link>
             
            @auth
                <x-responsive-nav-link :href="route('registration.create')" :active="request()->routeIs('registration.create')"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-300
                           {{ request()->routeIs('registration.create') 
                              ? 'bg-yellow-500/20 text-yellow-400 border border-yellow-500/50' 
                              : 'text-gray-300 hover:text-yellow-400 hover:bg-yellow-500/10' }}">
                    {{ __('Registrasi Lomba') }}
                </x-responsive-nav-link>
            @endauth
        </div>

        @auth
        <div class="px-6 py-4 border-t border-yellow-500/20 bg-gradient-to-br from-gray-900/50 to-gray-800/50">
            <!-- Mobile Admin/Juri Panel -->
            @if(Auth::user()->is_admin)
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center gap-3 px-4 py-3 mb-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-xl text-yellow-400 font-bold text-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                    </svg>
                    Admin Panel
                </a>
            @elseif(Auth::user()->role === 2)
                <a href="{{ route('juri.dashboard') }}" 
                   class="flex items-center gap-3 px-4 py-3 mb-3 bg-gradient-to-r from-green-500/20 to-green-400/20 backdrop-blur-xl border border-green-500/50 rounded-xl text-green-400 font-bold text-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Panel Juri
                </a>
            @endif

            <!-- Mobile User Info -->
            <div class="flex items-center gap-3 px-4 py-3 mb-3 bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-xl">
                @if (Auth::user()->avatar)
                    <img src="{{ Storage::url(Auth::user()->avatar) }}" 
                         alt="Avatar" 
                         class="h-10 w-10 rounded-full object-cover ring-2 ring-yellow-500/30">
                @else
                    <div class="h-10 w-10 rounded-full bg-gradient-to-br from-gray-800 to-gray-900 ring-2 ring-yellow-500/30 flex items-center justify-center">
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                @endif
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-gray-100 truncate">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-gray-400 truncate">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <!-- Mobile Menu Links -->
            <div class="space-y-2">
                <x-responsive-nav-link :href="route('profile.edit')"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-gray-300 hover:text-yellow-400 hover:bg-yellow-500/10 transition-all duration-200">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                    {{ __('Edit Profil') }}
                </x-responsive-nav-link>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-red-400 hover:text-red-300 hover:bg-red-500/10 transition-all duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                        </svg>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth
    </div>
</nav>