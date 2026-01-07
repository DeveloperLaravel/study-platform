<x-app-layout>

    <!-- عنوان الصفحة -->
    <header
        class="text-center py-14 transition-colors duration-700
               bg-gradient-to-r from-green-400 via-blue-400 to-purple-500
               dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">

        <h1 class="text-4xl md:text-5xl font-extrabold
                   text-gray-900 dark:text-yellow-400 mb-3">
            مسارات التعلّم
        </h1>

        <p class="text-lg md:text-xl
                  text-gray-800 dark:text-gray-300">
            اختر مسارك وابدأ رحلتك البرمجية بثقة
        </p>
    </header>

    <!-- قسم المسارات -->
    <section dir="rtl"
        class="py-16 px-4 sm:px-6 lg:px-16 transition-colors duration-700
               bg-gradient-to-br from-green-100 via-blue-100 to-purple-100
               dark:bg-gray-900">

        @php
            $courses = [
                [
                    'title' => 'مسار Flutter',
                    'desc' => 'تعلم تطوير تطبيقات الموبايل والويب باستخدام Flutter و Dart.',
                    'icon' => '📱',
                    'gradient' => 'from-blue-500 to-purple-500',
                    'link' => 'https://docs.flutter.dev/',
                ],
                [
                    'title' => 'مسار Laravel',
                    'desc' => 'بناء تطبيقات ويب قوية وحديثة باستخدام Laravel و PHP.',
                    'icon' => '🌐',
                    'gradient' => 'from-green-500 to-emerald-500',
                    'link' => 'https://laravel.com/',
                ],
                [
                    'title' => 'مسار Unity',
                    'desc' => 'تطوير ألعاب 2D و 3D باستخدام Unity و C#.',
                    'icon' => '🎮',
                    'gradient' => 'from-red-500 to-pink-500',
                    'link' => 'https://unity.com/',
                ],
            ];
        @endphp

        <div class="max-w-7xl mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($courses as $course)
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

                        <a href="{{ $course['link'] }}"
                           class="inline-block px-6 py-3 rounded-full font-semibold
                                  bg-gradient-to-r {{ $course['gradient'] }}
                                  text-white
                                  transition transform hover:scale-105">
                            استكشاف المسار
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- لماذا تختار مساراتنا -->
    <section dir="rtl"
        class="py-16 px-4 sm:px-6 lg:px-16 transition-colors duration-700
               bg-white dark:bg-gray-900">

        <h2
            class="text-3xl font-extrabold text-center mb-14
                   text-gray-900 dark:text-yellow-400">
            لماذا تختار مساراتنا؟
        </h2>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

            @php
                $features = [
                    ['icon'=>'🚀','title'=>'تعلّم عملي','desc'=>'مشاريع حقيقية تبني خبرتك خطوة بخطوة.'],
                    ['icon'=>'👨‍🏫','title'=>'خبراء محترفون','desc'=>'دروس مقدمة من مطورين ذوي خبرة.'],
                    ['icon'=>'🤝','title'=>'مجتمع داعم','desc'=>'تفاعل ومشاركة مع متعلمين مثلك.'],
                ];
            @endphp

            @foreach($features as $feature)
                <div
                    class="p-8 text-center rounded-2xl shadow-lg
                           bg-gradient-to-br from-gray-50 to-gray-100
                           dark:from-gray-800 dark:to-gray-800
                           transition transform hover:-translate-y-1">

                    <div class="text-4xl mb-4">{{ $feature['icon'] }}</div>

                    <h3
                        class="text-xl font-bold mb-2
                               text-gray-900 dark:text-yellow-400">
                        {{ $feature['title'] }}
                    </h3>

                    <p
                        class="text-gray-700 dark:text-gray-300">
                        {{ $feature['desc'] }}
                    </p>
                </div>
            @endforeach

        </div>
    </section>

</x-app-layout>
