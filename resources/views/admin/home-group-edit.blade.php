<x-admin-layout>
    <div id="root">


        <!-- Nav Bar -->
        <x-admin.nav>
            <x-slot name="title">
                {{__('Groups')}}
            </x-slot>
        </x-admin.nav>

        <!-- Header -->
        <x-admin.header/>


        <!-- Main Content -->
        <livewire:admin.group.content-edit :group="$group"/>

    </div>

</x-admin-layout>
