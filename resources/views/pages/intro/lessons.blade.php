<x-app-layout>

         <!-- عنوان الصفحة -->
    <header
        class="text-center py-14 transition-colors duration-700
               bg-gradient-to-r from-green-400 via-blue-400 to-purple-500
               dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">

        <h1 class="text-4xl md:text-5xl font-extrabold
                   text-gray-900 dark:text-yellow-400 mb-3">
      📚 جميع الدروس التعليمية

        </h1>

        <p class="text-lg md:text-xl
                  text-gray-800 dark:text-gray-300">
   مجموعة دروس منظمة ومبسطة لتعلم البرمجة خطوة بخطوة
                باستخدام أحدث التقنيات وأفضل الممارسات. 
        </p>
    </header>
<section dir="rtl"
        class="py-16 px-4 sm:px-6 lg:px-16 transition-colors duration-700
               bg-gradient-to-br from-green-100 via-blue-100 to-purple-100
               dark:bg-gray-900">

    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-purple-300/30 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-green-300/30 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto">

        {{-- Header --}}
        <div class="text-center mb-16">
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-4
                       text-gray-900 dark:text-yellow-300">
            </h1>              


            <p class="max-w-3xl mx-auto text-lg text-gray-700 dark:text-gray-300">
            
            </p>
        </div>

        {{-- Lessons Grid --}}
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

            @php
                $lessons = [
                    [
                        'title' => 'مقدمة في Laravel',
                        'desc'  => 'تعرف على أساسيات Laravel وبنية المشروع.',
                        'icon'  => '🧱',
                        // 'route' => 'lessons.laravel.intro',
                        'route' => 'lessons',
                        'color' => 'from-red-500 to-orange-500',
                    ],
                    [
                        'title' => 'Blade Components',
                        'desc'  => 'تعلم كيفية بناء واجهات احترافية باستخدام Blade.',
                        'icon'  => '🧩',
                        // 'route' => 'lessons.laravel.blade',
                        'route' => 'lessons',
                        'color' => 'from-blue-500 to-indigo-500',
                    ],
                    [
                        'title' => 'Laravel Sanctum',
                        'desc'  => 'نظام تسجيل الدخول والحماية باستخدام API Tokens.',
                        'icon'  => '🔐',
                        // 'route' => 'lessons.laravel.sanctum',
                        'route' => 'lessons',
                        'color' => 'from-green-500 to-emerald-500',
                    ],
                    [
                        'title' => 'Dart Basics',
                        'desc'  => 'الأساسيات المهمة للغة Dart.',
                        'icon'  => '🎯',
                        // 'route' => 'lessons.dart.basic',
                        'route' => 'lessons',
                        'color' => 'from-cyan-500 to-blue-500',
                    ],
                    [
                        'title' => 'Flutter UI',
                        'desc'  => 'تصميم واجهات جميلة باستخدام Flutter.',
                        'icon'  => '📱',
                        // 'route' => 'lessons.flutter.ui',
                        'route' => 'lessons',
                        'color' => 'from-purple-500 to-pink-500',
                    ],
                    [
                        'title' => 'Bloc & State Management',
                        'desc'  => 'إدارة الحالة بطريقة احترافية.',
                        'icon'  => '⚙️',
                        // 'route' => 'lessons.flutter.bloc',
                        'route' => 'lessons',
                        'color' => 'from-yellow-500 to-orange-500',
                    ],
                ];
            @endphp

            @foreach($lessons as $lesson)
                <a href="{{ route($lesson['route']) }}"
                   class="group relative bg-white dark:bg-gray-800
                          rounded-2xl p-6 shadow-lg
                          hover:shadow-2xl transition-all duration-300
                          transform hover:-translate-y-2">

                    {{-- Icon --}}
                    <div class="w-14 h-14 flex items-center justify-center
                                rounded-xl bg-gradient-to-br {{ $lesson['color'] }}
                                text-white text-2xl mb-5">
                        {{ $lesson['icon'] }}
                    </div>

                    {{-- Content --}}
                    <h3 class="text-xl font-bold mb-2
                               text-gray-900 dark:text-yellow-300">
                        {{ $lesson['title'] }}
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        {{ $lesson['desc'] }}
                    </p>

                    {{-- Button --}}
                    <span class="inline-flex items-center gap-2
                                 text-sm font-semibold
                                 text-blue-600 dark:text-yellow-400
                                 group-hover:gap-3 transition-all">
                        ابدأ الدرس
                        <span>→</span>
                    </span>
                </a>
            @endforeach

        </div>

        {{-- Footer Note --}}
        <div class="text-center mt-20">
            <p class="text-gray-700 dark:text-gray-400">
                🚀 استمر في التعلم، فالمعرفة هي طريقك للاحتراف
            </p>
        </div>

    </div>
</section>
</x-app-layout>
