<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Test') }}
        </h2>
    </x-slot>

    <livewire:alert-success/>

    <x-main>

        <livewire:test.card :test="$testsCard"/>

    </x-main>

</x-app-layout>
