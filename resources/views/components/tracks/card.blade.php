@props(['course'])

<div
    class="rounded-3xl overflow-hidden shadow-xl
           bg-white dark:bg-gray-800
           transition transform hover:-translate-y-2 hover:shadow-2xl">

    <div class="p-8 text-center">

        <div
            class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center
                   bg-gradient-to-r {{ $course['gradient'] }}
                   text-3xl text-white shadow-lg">
            {{ $course['icon'] }}
        </div>

        <h2
            class="text-2xl font-bold mb-3
                   text-gray-900 dark:text-yellow-400">
            {{ $course['title'] }}
        </h2>

        <p
            class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            {{ $course['desc'] }}
        </p>

        <a href="{{ $course['link'] }}" target="_blank"
           class="inline-block px-6 py-3 rounded-full font-semibold
                  bg-gradient-to-r {{ $course['gradient'] }}
                  text-white
                  transition transform hover:scale-105">
            استكشاف المسار
        </a>

    </div>
</div>
