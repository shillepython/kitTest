<x-jet-action-section>
    <x-slot name="title">
        {{ __('Switch language') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Switch language on all web site.') }}
    </x-slot>

    <x-slot name="content">

        <div class="m-5">
            <x-nav.localization />
        </div>


    </x-slot>
</x-jet-action-section>
