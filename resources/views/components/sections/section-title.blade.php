@props(['title', 'subtitle', 'dark' => false])

<div class="text-center {{ $dark ? 'text-white' : '' }}">
    <h2>{{ $title }}</h2>
    <p>{{ $subtitle }}</p>
</div>
