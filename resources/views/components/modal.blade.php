<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>@props(['name', 'show' => false])

<div x-data="{ open: @json($show) }" x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div {{ $attributes->merge(['class' => 'bg-white rounded-lg shadow-lg w-1/3']) }}>
        {{ $slot }}
    </div>
</div>
