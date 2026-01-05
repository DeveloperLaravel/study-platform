<x-app-layout> 

    {{-- Hero Section --}}
    <section dir="rtl" 
        :class="dark ? 'bg-gray-900 bg-opacity-80 text-yellow-400' : 'bg-gradient-to-r from-green-200 to-blue-200 text-gray-900'" 
        class="relative py-20 md:py-32 text-center transition-colors duration-500 z-10 px-4 md:px-8 lg:px-16">

        <h1 :class="dark ? 'text-yellow-400' : 'text-gray-900'" 
            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 drop-shadow-lg leading-tight">
            نؤمن أن التعلّم الحقيقي يبدأ من الفهم
        </h1>

        <p :class="dark ? 'text-gray-300' : 'text-gray-700'" 
            class="text-base sm:text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto leading-relaxed">
            في عصر التحوّل الرقمي، أصبحت البرمجة لغة العصر وأحد أهم المهارات التي تفتح أبواب المستقبل.
            لم تعد البرمجة حكرًا على المتخصصين فقط، بل أصبحت أداة أساسية لكل من يسعى لفهم التكنولوجيا
        </p> 

        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">
            <a href="#" 
                :class="dark ? 'bg-yellow-400 text-gray-900 hover:bg-yellow-300' : 'bg-green-600 text-white hover:bg-green-700'" 
                class="px-6 sm:px-8 py-3 rounded-full shadow-lg text-lg sm:text-xl transition transform hover:scale-105">
                ابدأ التعلم
            </a>
            <a href="#" 
                :class="dark ? 'border-yellow-400 text-yellow-300 hover:bg-gray-700' : 'border-blue-600 text-blue-600 hover:bg-blue-100'" 
                class="px-6 sm:px-8 py-3 border-2 rounded-full shadow-lg text-lg sm:text-xl transition transform hover:scale-105">
                تسجيل مستخدم
            </a>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="max-w-7xl mx-auto px-4 md:px-8 lg:px-16 py-16 md:py-20 grid md:grid-cols-3 gap-8 relative z-10">

        @php
            $features = [
                [
                    'img' => '3.png',
                    'title' => 'مستقبل تطوير التطبيقات متعددة المنصات',
                    'desc' => 'ومفتوح المصدر من Google يُستخدم لتطوير تطبيقات الموبايل، الويب، وسطح المكتب من كود واحد فقط. يعتمد Flutter على لغة Dart،',
					'route'=>'pagedart',
                ],
                [
                    'img' => '2.png',
                    'title' => 'الخيار الأفضل لمطوري PHP',
                    'desc' => 'يوفّر Laravel مجموعة غنية من الأدوات والميزات مثل نظام التوجيه (Routing)، إدارة قواعد البيانات باستخدام Eloquent ORM، الحماية المتقدمة.',
					'route'=>'pagephp',
                ],
                [
                    'img' => '5.png',
                    'title' => 'مدخل إلى تطوير الألعاب باستخدام Unity و C#',
                    'desc' => 'Unity هو محرك ألعاب (Game Engine) قوي يُستخدم لتطوير الألعاب والتطبيقات التفاعلية ثنائية وثلاثية الأبعاد، ويعمل على عدة منصات.',
					'route'=>'pageunity',
                ],
            ];
        @endphp

        @foreach($features as $feature)
        <a href="{{ route($feature['route'] ) }}"
            :class="dark ? 'bg-gray-700 text-yellow-300' : 'bg-gradient-to-br from-green-100 to-blue-100 text-gray-900'"
            class="group p-6 sm:p-8 rounded-2xl shadow-lg transform transition duration-500 hover:-translate-y-2 hover:scale-105 flex flex-col">

            <div class="relative mb-5 overflow-hidden rounded-xl">
                <img src="{{ asset('images/' . $feature['img']) }}" 
                     alt="{{ $feature['title'] }}" 
                     class="w-full h-48 sm:h-56 md:h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition"></div>
            </div>

            <h3 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 text-center">
                {{ $feature['title'] }}
            </h3>

            <p :class="dark ? 'text-gray-300' : 'text-gray-700'" 
               class="text-sm sm:text-base md:text-lg text-right mb-5 leading-relaxed">
                {{ $feature['desc'] }}
            </p>

            <div class="mt-auto inline-flex items-center text-lg font-medium text-blue-600 dark:text-yellow-400 hover:underline cursor-pointer transition-transform group-hover:translate-x-1">
                ابدأ الآن <span class="ml-2">→</span>
            </div>

        </a>
        @endforeach

    </section>

</x-app-layout>
