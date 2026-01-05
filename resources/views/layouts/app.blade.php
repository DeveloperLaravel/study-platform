<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Laravel Study' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{ dark: false }"
      x-init="
        dark = localStorage.getItem('theme') === 'dark';
        $watch('dark', val => {
            document.documentElement.classList.toggle('dark', val);
            localStorage.setItem('theme', val ? 'dark' : 'light');
        });
      "
      :class="dark ? 'dark' : ''"
      class="transition-colors duration-500 bg-white text-gray-900 dark:bg-gray-900 dark:text-yellow-300">

    {{-- Navbar --}}
    <x-header.navbar />

    {{-- Main Content --}}
    <main class="transition-colors duration-500">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <x-header.footer />

</body>
</html>
