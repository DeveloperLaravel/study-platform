@props(['feature'])

<div
    class="p-8 text-center rounded-2xl shadow-lg
           bg-gradient-to-br from-gray-50 to-gray-100
           dark:from-gray-800 dark:to-gray-800
           transition transform hover:-translate-y-1">

    <div class="text-4xl mb-4">{{ $feature['icon'] }}</div>

    <h3
        class="text-xl font-bold mb-2
               text-gray-900 dark:text-yellow-400">
        {{ $feature['title'] }}
    </h3>

    <p
        class="text-gray-700 dark:text-gray-300">
        {{ $feature['desc'] }}
    </p>
</div>
