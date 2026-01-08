<section dir="rtl"
    class="relative overflow-hidden
           py-20 sm:py-24 md:py-28 lg:py-36
           px-4 sm:px-6 lg:px-20
           bg-gradient-to-br from-green-100 via-blue-100 to-purple-100
           dark:bg-gradient-to-br dark:from-gray-900 dark:via-gray-900 dark:to-black
           transition-colors duration-700">

    {{-- Glow --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-32 -right-32 w-72 sm:w-96 h-72 sm:h-96
                    bg-green-300/40 dark:bg-yellow-400/20
                    rounded-full blur-3xl"></div>

        <div class="absolute bottom-0 left-0 w-64 sm:w-80 h-64 sm:h-80
                    bg-blue-300/40 dark:bg-purple-600/20
                    rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 max-w-5xl mx-auto text-center">

        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl  font-extrabold leading-tight mb-6
                   text-gray-900 dark:text-yellow-400">
            {{ $title }}
            <span class="block  text-green-700 dark:text-yellow-300 mt-2">
                {{ $highlight }}
            </span>
        </h1>

        <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl
                  max-w-3xl mx-auto leading-relaxed
                  text-gray-700 dark:text-gray-300">
            {{ $description }}
        </p>

        <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">
            {{ $actions }}
        </div>
    </div>
</section>
