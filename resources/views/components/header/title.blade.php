@props([
    'title' => '',
    'subtitle' => ''
])

<header
    class="text-center py-14 transition-colors duration-700
               bg-gradient-to-r from-green-400 via-blue-400 to-purple-500
               dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">

    <h1 class="text-4xl md:text-5xl font-extrabold
                   text-gray-900 dark:text-yellow-400 mb-3">
        {{ $title }}
    </h1>

    <p class="text-lg md:text-xl
                  text-gray-800 dark:text-gray-300">
        {{ $subtitle }}
    </p>
</header>
