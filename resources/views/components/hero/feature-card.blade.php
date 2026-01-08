<a href="{{ route($route) }}"
   class="group relative overflow-hidden
          p-6 rounded-3xl
          shadow-lg hover:shadow-2xl
          transition-all duration-500
          transform hover:-translate-y-2
          bg-white/80 backdrop-blur
          dark:bg-gray-800/80">

    {{-- Image --}}
    <div class="relative mb-5 overflow-hidden rounded-2xl">
        <img src="{{ asset('images/' . $image) }}"
             class="w-full h-48 object-cover
                    transition-transform duration-700
                    group-hover:scale-110">
        <div class="absolute inset-0 bg-black/10 dark:bg-black/30
                    opacity-0 group-hover:opacity-100 transition"></div>
    </div>

    <h3 class="text-xl font-bold mb-3 text-center
               text-gray-900 dark:text-yellow-300">
        {{ $title }}
    </h3>

    <p class="text-gray-700 dark:text-gray-300 mb-5 leading-relaxed">
        {{ $description }}
    </p>

    <div class="flex justify-end font-semibold
                text-blue-600 dark:text-yellow-400
                group-hover:translate-x-1 transition-transform">
        ابدأ الآن →
    </div>
</a>
