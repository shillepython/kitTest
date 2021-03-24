<x-admin-layout>
    <div id="root">
        <livewire:alert-success/>

        <!-- Nav Bar -->
        <x-admin.nav>
            <x-slot name="title">
                {{__('Dashboard')}}
            </x-slot>
        </x-admin.nav>

        <!-- Header -->
        <x-admin.header/>

        <!-- Main Content -->
        <livewire:admin.home.content/>

    </div>

</x-admin-layout>
