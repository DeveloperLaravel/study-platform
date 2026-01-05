<nav x-data="{ open: false }"
     class="relative z-20 transition-colors duration-500"
     :class="dark ? 'bg-gray-800 bg-opacity-90 backdrop-blur-md shadow-lg text-yellow-300' : 'bg-gradient-to-r from-green-400 to-blue-500 text-white shadow-lg'">

    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">

            {{-- Logo --}}
			<img src="images/1.png" width="60" height="80"  alt="" srcset="">

            {{-- Desktop Links --}}
            <div class="hidden md:flex space-x-6 rtl:space-x-reverse">
                @foreach(['الرئيسية','الدروس','المسارات','تواصل معنا'] as $link)
                    <a href="#" class="transition hover:text-yellow-300 dark:text-yellow-300 dark:hover:text-white">
                        {{ $link }}
                    </a>
                @endforeach
            </div>

            {{-- Actions --}}
            <div class="flex items-center space-x-3 rtl:space-x-reverse">


                {{-- Dark / Light Toggle --}}
                <button @click="dark = !dark"
                        class="relative w-16 h-8 rounded-full p-1 flex items-center transition-all duration-500 shadow-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 hover:scale-105"
                        :class="dark ? 'bg-gray-700' : 'bg-yellow-400'">
                    <span x-show="!dark" class="absolute left-1 w-6 h-6 bg-white rounded-full flex items-center justify-center text-yellow-500">🌙</span>
                    <span x-show="dark" class="absolute right-1 w-6 h-6 bg-white rounded-full flex items-center justify-center text-yellow-400">☀️</span>
                    <div :class="dark ? 'translate-x-7 bg-yellow-400' : 'translate-x-0 bg-white'" class="w-6 h-6 rounded-full transition-transform duration-500 shadow-inner">
						
					</div>
                </button>

                {{-- Mobile Menu --}}
                <button @click="open = !open"
                        class="md:hidden w-12 h-12 flex items-center justify-center rounded-full bg-white dark:bg-yellow-400 hover:scale-110 transition-transform shadow-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                    <span x-show="!open" class="text-2xl">☰</span>
                    <span x-show="open" class="text-2xl">✖</span>
					
                </button>
            </div>
        </div>



        {{-- Mobile Menu --}}
        <div x-show="open" x-transition class="md:hidden mt-2 space-y-2">
            @foreach(['الرئيسية','الدروس','المسارات','تواصل معنا'] as $link)
                <a href="#"
                   class="block px-4 py-2 rounded-lg transition hover:bg-gray-600 dark:hover:bg-gray-500"
                   :class="dark ? 'bg-gray-700 text-yellow-300' : 'bg-green-100 text-gray-900 hover:bg-green-200'">
                    {{ $link }}
                </a>
            @endforeach
        </div>
    </div>
</nav>
