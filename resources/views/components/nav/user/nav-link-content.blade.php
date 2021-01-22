<x-slot name="content">
    <!-- Account Management -->
    <div class="block px-4 py-2 text-xs text-gray-400">
        {{ __('Manage Account') }}
    </div>

    <x-jet-dropdown-link href="{{ route('profile.show') }}">
        {{ __('Profile') }}
    </x-jet-dropdown-link>

    <x-jet-dropdown-link href="">
        {{ __('Marks') }}
    </x-jet-dropdown-link>

    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
            {{ __('API Tokens') }}
        </x-jet-dropdown-link>
    @endif

    <div class="border-t border-gray-100"></div>

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-jet-dropdown-link href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
            {{ __('Logout') }}
        </x-jet-dropdown-link>
    </form>
</x-slot>
