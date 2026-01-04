<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>@props(['active' => false])

@php
$classes = $active ? 'text-indigo-600 hover:text-indigo-700' : 'text-gray-500 hover:text-gray-700';
@endphp

<a {{ $attributes->merge(['class' => 'px-3 py-2 rounded-md text-sm font-medium ' . $classes]) }}>
    {{ $slot }}
</a>
