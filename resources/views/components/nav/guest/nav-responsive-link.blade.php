<div class="py-4  border-t border-gray-200">

    <div class=" space-y-1">
        <!-- Account Management -->
        <x-jet-responsive-nav-link href="{{ route('login', app()->getLocale()) }}"
                                   :active="request()->routeIs('login')">
            {{ __('Login') }}
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('register', app()->getLocale()) }}"
                                   :active="request()->routeIs('register')">
            {{ __('Registration') }}
        </x-jet-responsive-nav-link>

    </div>
</div>
