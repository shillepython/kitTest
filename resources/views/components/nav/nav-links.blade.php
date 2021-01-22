<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-jet-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
        {{ __('Home') }}
    </x-jet-nav-link>
    <x-jet-nav-link href="{{ route('test') }}" :active="request()->routeIs('test')">
        {{ __('Test') }}
    </x-jet-nav-link>
    <x-jet-nav-link href="{{ route('article') }}" :active="request()->routeIs('article')">
        {{ __('Article') }}
    </x-jet-nav-link>
</div>
