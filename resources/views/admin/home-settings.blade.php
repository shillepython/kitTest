<x-admin-layout>
    <div id="root">
        <livewire:alert-success/>

        <!-- Nav Bar -->
        <x-admin.nav>
            <x-slot name="title">
                {{__('Sattings site')}}
            </x-slot>
        </x-admin.nav>

        <!-- Header -->
        <x-admin.header/>

        <!-- Main Content -->
        <x-admin.settings.content/>

    </div>

</x-admin-layout>
