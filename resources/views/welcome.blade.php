<x-guest-layout>



    <div class="min-h-screen bg-gray-100">


        @livewire('navigation-menu')


        <!-- Page Heading -->
        <x-welcome.header-welcome>
            {{ __('Home') }}
        </x-welcome.header-welcome>


        <!-- Page Content -->
        <x-main>
            {{ __('Home') }}


        </x-main>

    </div>

    @stack('modals')

    @livewireScripts
</x-guest-layout>
