<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-jet-nav-link href="{{ route('welcome', app()->getLocale()) }}" :active="request()->routeIs('welcome', app()->getLocale())">
        {{ __('Home') }}
    </x-jet-nav-link>
    <x-jet-nav-link href="{{ route('test.index', app()->getLocale()) }}" :active="request()->routeIs('test.*', app()->getLocale())">
        {{ __('Test') }}
    </x-jet-nav-link>
    <x-jet-nav-link href="{{ route('article', app()->getLocale()) }}" :active="request()->routeIs('article', app()->getLocale())">
        {{ __('Article') }}
    </x-jet-nav-link>
    @can('admin')
        <x-jet-nav-link href="{{ route('admin-home', app()->getLocale()) }}" :active="request()->routeIs('admin-home', app()->getLocale())">
            {{ __('Admin panel') }}
        </x-jet-nav-link>
    @endcan
</div>
