<div
    class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
    id="example-collapse-sidebar"
>
    <div
        class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300"
    >
        <div class="flex flex-wrap">
            <div class="w-6/12">
                <a
                    class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                    href="{{ route('welcome', app()->getLocale()) }}"
                >
                    {{ __('Kit Test Panel') }}
                </a>
            </div>
            <div class="w-6/12 flex justify-end">
                <button
                    type="button"
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    onclick="toggleNavbar('example-collapse-sidebar')"
                >
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    <form class="mt-6 mb-4 md:hidden">
        <div class="mb-3 pt-0">
            <input
                type="text"
                placeholder="Search"
                class="px-3 py-2 h-12 border border-solid border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
            />
        </div>
    </form>

    <!-- Divider -->
    <hr class="my-4 md:min-w-full"/>
    <!-- Heading -->
    <h6
        class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
    >
        {{ __('Home links') }}
    </h6>
    <!-- Navigation -->

    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
        <x-admin.nav.link href="{{ route('welcome', app()->getLocale()) }}" :active="request()->routeIs('admin-home', app()->getLocale())">
            <i class="fas fa-home mr-2 text-sm opacity-75"></i>
            {{ __('Dashboard') }}
        </x-admin.nav.link>

        <x-admin.nav.link href="{{ route('test.index', app()->getLocale()) }}" :active="request()->routeIs('admin-home', app()->getLocale())">
            <i class="fas fa-file-alt mr-2 text-sm opacity-75"></i>
            {{ __('Test') }}
        </x-admin.nav.link>

        <x-admin.nav.link href="{{ route('article', app()->getLocale()) }}" :active="request()->routeIs('admin-settings', app()->getLocale())">
            <i class="fas fa-newspaper mr-2 text-sm opacity-75"></i>
            {{ __('Article') }}
        </x-admin.nav.link>

        <x-admin.nav.link href="{{ route('profile.show', app()->getLocale()) }}" :active="request()->routeIs('admin-settings', app()->getLocale())">
            <i class="fas fa-user mr-2 text-sm opacity-75"></i>
            {{ __('Profile') }}
        </x-admin.nav.link>

        <x-admin.nav.link href="{{ route('marks', app()->getLocale()) }}" :active="request()->routeIs('admin-settings', app()->getLocale())">
            <i class="fas fa-table mr-2 text-sm opacity-75"></i>
            {{ __('Marks') }}
        </x-admin.nav.link>
    </ul>


    <!-- Divider -->
    <hr class="my-4 md:min-w-full"/>
    <!-- Heading -->
    <h6
        class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
    >
        {{ __('Admin panel') }}
    </h6>
    <!-- Navigation -->

    <ul class="md:flex-col md:min-w-full flex flex-col list-none">

        <x-admin.nav.link href="{{ route('admin-home', app()->getLocale()) }}" :active="request()->routeIs('admin-home', app()->getLocale())">
            <i class="fas fa-chart-bar mr-2 text-sm opacity-75"></i>
            {{ __('Statistics') }}
        </x-admin.nav.link>

        <x-admin.nav.link href="{{ route('admin-settings', app()->getLocale()) }}" :active="request()->routeIs('admin-settings', app()->getLocale())">
            <i class="fas fa-tools mr-2 text-sm opacity-75"></i>
            {{ __('Settings') }}

        </x-admin.nav.link>

        <x-admin.nav.link href="{{ route('group.index', app()->getLocale()) }}" :active="request()->routeIs('group.index', app()->getLocale())">
            <i class="fas fa-users mr-2 text-sm opacity-75"></i>
            {{ __('Groups') }}

        </x-admin.nav.link>

        <x-admin.nav.link href="{{ route('admin-users', app()->getLocale()) }}" :active="request()->routeIs('admin-settings', app()->getLocale())">
            <i class="fas fa-table mr-2 text-sm opacity-75"></i>
            {{ __('Tables') }}

        </x-admin.nav.link>

        <x-admin.nav.link href="{{ route('admin-create-test', app()->getLocale()) }}" :active="request()->routeIs('admin-settings', app()->getLocale())">
            <i class="fas fa-file-alt mr-2 text-sm opacity-75"></i>
            {{ __('Test') }}

        </x-admin.nav.link>
    </ul>
</div>
