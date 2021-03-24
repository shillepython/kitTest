@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-xs uppercase py-3 font-bold block text-indigo-600 hover:text-indigo-400'
                : 'text-xs uppercase py-3 font-bold block text-gray-800 hover:text-gray-600';
@endphp
<li class="items-center">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
