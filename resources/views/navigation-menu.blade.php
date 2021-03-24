

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('welcome', app()->getLocale()) }}">
                        <img src="{{ asset('storage/logo/SVG/logo.svg') }}" alt=""  class="block h-12 w-auto" >
                    </a>
                </div>

                <!-- Navigation Links -->
                <x-nav.nav-links />

            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">

            @if(!Auth::check())
                    <div class="ml-3 relative">
                        <x-jet-nav-link class="mx-2" href="{{ route('login', app()->getLocale()) }}" :active="request()->routeIs('login', app()->getLocale())">
                            {{ __('Login') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link class="mx-2" href="{{ route('register', app()->getLocale()) }}"
                                        :active="request()->routeIs('register', app()->getLocale())">
                            {{ __('Registration') }}
                        </x-jet-nav-link>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                @if(Auth::check())
                    <!-- Settings currentTeam -->
                        <x-nav.nav-links-currentTeam />


                <!-- Nav logo -->
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">

                            <!-- Nav Logo User -->
                            <x-nav.nav-logo-user />

                            <!-- Nav Link's content -->
                            <x-nav.user.nav-link-content />

                        </x-jet-dropdown>
                    </div>
                @endif
                </div>

            <!-- Hamburger -->
            <x-nav.hamburger-menu />
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('welcome', app()->getLocale()) }}" :active="request()->routeIs('welcome', app()->getLocale())">
                {{ __('Home') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('test.index', app()->getLocale()) }}" :active="request()->routeIs('test', app()->getLocale())">
                {{ __('Test') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('article', app()->getLocale()) }}" :active="request()->routeIs('article', app()->getLocale())">
                {{ __('Article') }}
            </x-jet-responsive-nav-link>
        </div>


    @if(Auth::check())
            <x-nav.user.nav-responsive-link />
        @else
            <x-nav.guest.nav-responsive-link />
        @endif

    </div>
</nav>
