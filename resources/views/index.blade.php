<x-app-layout>

{{-- Hero Section --}}
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

        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl
                   font-extrabold leading-tight mb-6
                   text-gray-900 dark:text-yellow-400">
            نؤمن أن التعلّم الحقيقي
            <span class="block text-green-700 dark:text-yellow-300 mt-2">
                يبدأ من الفهم
            </span>
        </h1>

        <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl
                  max-w-3xl mx-auto leading-relaxed
                  text-gray-700 dark:text-gray-300">
            في عصر التحوّل الرقمي، أصبحت البرمجة لغة العصر وأحد أهم المهارات
            التي تفتح أبواب المستقبل، وهي متاحة اليوم لكل من يسعى للتميّز.
        </p>

        <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">

            <a href="{{ route('pagetest') }}"
               class="px-7 sm:px-8 py-3 sm:py-4 rounded-full
                      text-base sm:text-lg font-semibold
                      shadow-lg transition-all duration-300
                      transform hover:-translate-y-1 hover:scale-105
                      bg-green-600 text-white hover:bg-green-700
                      dark:bg-yellow-400 dark:text-gray-900 dark:hover:bg-yellow-300">
                ابدأ التعلم
            </a>

            <a href="{{ route('register') }}"
               class="px-7 sm:px-8 py-3 sm:py-4 rounded-full
                      text-base sm:text-lg font-semibold
                      border-2 transition-all duration-300
                      transform hover:-translate-y-1 hover:scale-105
                      border-blue-600 text-blue-600 hover:bg-blue-100
                      dark:border-yellow-400 dark:text-yellow-300 dark:hover:bg-gray-800">
                تسجيل مستخدم
            </a>

        </div>
    </div>
</section>

{{-- Features Section --}}
<section class="py-16 px-4 sm:px-6 lg:px-16 transition-colors duration-700
               bg-gradient-to-br from-green-100 via-blue-100 to-purple-100
               dark:bg-gray-900">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">

    @php
    $features = [
        [
            'img' => '3.png',
            'title' => 'تطوير التطبيقات متعددة المنصات',
            'desc' => 'Flutter إطار عمل حديث من Google لبناء تطبيقات الموبايل والويب وسطح المكتب من كود واحد.',
            'route'=>'pagedart',
        ],
        [
            'img' => '2.png',
            'title' => 'Laravel الخيار الذكي للويب',
            'desc' => 'إطار PHP أنيق يوفر بنية قوية، أمان عالي، وسرعة تطوير مذهلة للتطبيقات الحديثة.',
            'route'=>'pagephp',
        ],
        [
            'img' => '5.png',
            'title' => 'صناعة الألعاب باستخدام Unity',
            'desc' => 'محرك ألعاب احترافي لإنشاء تجارب تفاعلية ثنائية وثلاثية الأبعاد لمختلف المنصات.',
            'route'=>'pageunity',
        ],
    ];
    @endphp

    @foreach($features as $feature)
    <a href="{{ route($feature['route']) }}"
       class="group relative overflow-hidden
              p-5 sm:p-6 md:p-8 rounded-3xl
              shadow-lg hover:shadow-2xl
              transition-all duration-500
              transform hover:-translate-y-2
              bg-white/80 backdrop-blur
              dark:bg-gray-800/80">

        {{-- Image --}}
        <div class="relative mb-5 overflow-hidden rounded-2xl">
            <img src="{{ asset('images/' . $feature['img']) }}"
                 class="w-full h-44 sm:h-48 md:h-56 object-cover
                        transition-transform duration-700
                        group-hover:scale-110">
            <div class="absolute inset-0 bg-black/10 dark:bg-black/30
                        opacity-0 group-hover:opacity-100 transition"></div>
        </div>

        <h3 class="text-lg sm:text-xl md:text-2xl
                   font-bold mb-3 text-center
                   text-gray-900 dark:text-yellow-300">
            {{ $feature['title'] }}
        </h3>

        <p class="text-sm sm:text-base leading-relaxed text-right mb-5
                  text-gray-700 dark:text-gray-300">
            {{ $feature['desc'] }}
        </p>

        <div class="flex items-center justify-end
                    text-base sm:text-lg font-semibold
                    text-blue-600 dark:text-yellow-400
                    group-hover:translate-x-1 transition-transform">
            ابدأ الآن <span class="ml-2">→</span>
        </div>

    </a>
    @endforeach

    </div>
</section>

</x-app-layout>
