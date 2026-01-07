
{{-- Page Container --}}

    {{-- Night Sky Background --}}
    <div x-show="dark" class="fixed inset-0 bg-gray-900 overflow-hidden z-0">
        <div class="absolute inset-0">
            {{-- Stars --}}
            <template x-for="i in 100">
                <div :style="`top:${Math.random()*100}%; left:${Math.random()*100}%; width:${Math.random()*2}px; height:${Math.random()*2}px;`"
                     class="bg-white rounded-full animate-pulse opacity-70"></div>
            </template>

            {{-- Moon --}}
            <div class="absolute top-10 right-10 w-24 h-24 rounded-full bg-yellow-300 shadow-lg animate-bounce"></div>
        </div>
    </div>

    {{-- Navbar --}}
    <nav class="relative z-10 transition-colors duration-500"
         :class="dark ? 'bg-gray-800 bg-opacity-80 backdrop-blur' : 'bg-gradient-to-r from-green-400 to-blue-500'">

        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">

                {{-- Logo --}}
                <div :class="dark ? 'text-yellow-400' : 'text-white'" class="text-2xl font-extrabold">
                    Laravel Study
                </div>

                {{-- Links for desktop --}}
                <div class="hidden md:flex space-x-6 rtl:space-x-reverse">
                    <a href="#" :class="dark ? 'text-gray-300 hover:text-yellow-300' : 'text-white hover:text-yellow-300'" class="transition">الرئيسية</a>
                    <a href="#" :class="dark ? 'text-gray-300 hover:text-yellow-300' : 'text-white hover:text-yellow-300'" class="transition">الدروس</a>
                    <a href="#" :class="dark ? 'text-gray-300 hover:text-yellow-300' : 'text-white hover:text-yellow-300'" class="transition">المسارات</a>
                    <a href="#" :class="dark ? 'text-gray-300 hover:text-yellow-300' : 'text-white hover:text-yellow-300'" class="transition">تواصل معنا</a>
                </div>

         <div class="flex items-center space-x-3 rtl:space-x-reverse">

    {{-- Dark / Light Mode Fancy Button Responsive --}}
    <button
        @click="dark = !dark"
        class="relative w-16 h-8 sm:w-14 sm:h-8 md:w-16 md:h-8 rounded-full p-1 flex items-center transition-all duration-500 shadow-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 hover:scale-105"
        :class="dark ? 'bg-gray-700' : 'bg-yellow-400'">

        {{-- القمر --}}
        <span x-show="!dark" 
              class="absolute left-1 w-6 h-6 sm:w-5 sm:h-5 md:w-6 md:h-6 bg-white rounded-full flex items-center justify-center text-yellow-500 transform transition-transform duration-500">
            🌙
        </span>

        {{-- الشمس --}}
        <span x-show="dark"
              class="absolute right-1 w-6 h-6 sm:w-5 sm:h-5 md:w-6 md:h-6 bg-white rounded-full flex items-center justify-center text-yellow-400 transform transition-transform duration-500">
            ☀️
        </span>

        {{-- الكرة المتحركة --}}
        <div :class="dark ? 'translate-x-7 sm:translate-x-6 md:translate-x-7 bg-yellow-400' : 'translate-x-0 bg-white'"
             class="w-6 h-6 sm:w-5 sm:h-5 md:w-6 md:h-6 rounded-full transition-transform duration-500 shadow-inner"></div>
    </button>

    {{-- Mobile menu button --}}
    <button @click="open = !open"
            class="md:hidden w-12 h-12 flex items-center justify-center rounded-full bg-white dark:bg-yellow-400 hover:scale-110 transition-transform shadow-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
        <span x-show="!open" class="text-2xl">☰</span>
        <span x-show="open" class="text-2xl">✖</span>
    </button>

</div>

            </div>

            {{-- Mobile menu --}}
            <div x-show="open" x-transition class="md:hidden mt-2 space-y-2">
                <a href="#" :class="dark ? 'bg-gray-700 dark:hover:bg-gray-600 text-gray-300' : 'bg-green-100 hover:bg-green-200 text-gray-800'" class="block px-4 py-2 rounded-lg transition">الرئيسية</a>
                <a href="#" :class="dark ? 'bg-gray-700 dark:hover:bg-gray-600 text-gray-300' : 'bg-green-100 hover:bg-green-200 text-gray-800'" class="block px-4 py-2 rounded-lg transition">الدروس</a>
                <a href="#" :class="dark ? 'bg-gray-700 dark:hover:bg-gray-600 text-gray-300' : 'bg-green-100 hover:bg-green-200 text-gray-800'" class="block px-4 py-2 rounded-lg transition">المسارات</a>
                <a href="#" :class="dark ? 'bg-gray-700 dark:hover:bg-gray-600 text-gray-300' : 'bg-green-100 hover:bg-green-200 text-gray-800'" class="block px-4 py-2 rounded-lg transition">تواصل معنا</a>
            </div>
        </div>
    </nav>
