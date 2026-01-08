@props(['lesson'])

<a href="{{ route($lesson['route']) }}"
   class="group relative
          bg-white dark:bg-gray-800
          rounded-2xl p-5 sm:p-6
          shadow-lg hover:shadow-2xl
          transition-all duration-300
          transform hover:-translate-y-2">

    {{-- Icon --}}
    <div class="w-12 h-12 sm:w-14 sm:h-14
                flex items-center justify-center
                rounded-xl bg-gradient-to-br {{ $lesson['color'] }}
                text-white text-xl sm:text-2xl mb-4 sm:mb-5">
        {{ $lesson['icon'] }}
    </div>

    {{-- Title --}}
    <h3 class="text-lg sm:text-xl
               font-bold mb-2
               text-gray-900 dark:text-yellow-300">
        {{ $lesson['title'] }}
    </h3>

    {{-- Description --}}
    <p class="text-sm sm:text-base
              text-gray-600 dark:text-gray-300
              mb-5 leading-relaxed">
        {{ $lesson['desc'] }}
    </p>

    {{-- Button --}}
    <span class="inline-flex items-center gap-2
                 text-sm font-semibold
                 text-blue-600 dark:text-yellow-400
                 group-hover:gap-3 transition-all">
        ابدأ الدرس →
    </span>
</a>
