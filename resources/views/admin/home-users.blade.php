<x-admin-layout>
    <div id="root">
        <!-- Nav Bar -->
        <x-admin.nav>
            <x-slot name="title">
                {{__('Users')}}
            </x-slot>
        </x-admin.nav>

        <!-- Header -->
        <x-admin.header/>

        <!-- Main Content -->

        <livewire:admin.users.content/>

    </div>

</x-admin-layout>
