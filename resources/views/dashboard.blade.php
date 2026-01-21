<x-app-layout>

    <div
        class="
            min-h-screen
            bg-gradient-to-br
            from-slate-100 via-white to-slate-200
            dark:from-gray-900 dark:via-gray-900 dark:to-gray-800
            py-10 px-4 transition-colors duration-500
        "
    >

        @php
            $lessons = [
                [
                    'title' => 'مقدمة في Laravel',
                    'desc'  => 'تعرف على أساسيات Laravel وبنية المشروع.',
                    'icon'  => '🧱',
                    'route' => 'pagephp',
                    'color' => 'from-red-500 to-orange-500',
                ],
                [
                    'title' => 'Blade Components',
                    'desc'  => 'تعلم كيفية بناء واجهات احترافية باستخدام Blade.',
                    'icon'  => '🧩',
                    'route' => 'lessons',
                    'color' => 'from-blue-500 to-indigo-500',
                ],
                [
                    'title' => 'Laravel Sanctum',
                    'desc'  => 'نظام تسجيل الدخول والحماية باستخدام API Tokens.',
                    'icon'  => '🔐',
                    'route' => 'lessons',
                    'color' => 'from-green-500 to-emerald-500',
                ],
                [
                    'title' => 'Dart Basics',
                    'desc'  => 'الأساسيات المهمة للغة Dart.',
                    'icon'  => '🎯',
                    'route' => 'pagedart',
                    'color' => 'from-cyan-500 to-blue-500',
                ],
                [
                    'title' => 'Flutter UI',
                    'desc'  => 'تصميم واجهات جميلة باستخدام Flutter.',
                    'icon'  => '📱',
                    'route' => 'pagedart',
                    'color' => 'from-purple-500 to-pink-500',
                ],
                [
                    'title' => 'Bloc & State Management',
                    'desc'  => 'إدارة الحالة بطريقة احترافية.',
                    'icon'  => '⚙️',
                    'route' => 'pagedart',
                    'color' => 'from-yellow-500 to-orange-500',
                ],
            ];

            $total = count($lessons);

            $laravel = collect($lessons)->filter(fn($l) =>
                str_contains(strtolower($l['title']), 'laravel')
            )->count();

            $dartFlutter = collect($lessons)->filter(fn($l) =>
                str_contains(strtolower($l['title']), 'dart') ||
                str_contains(strtolower($l['title']), 'flutter')
            )->count();

            $laravelPercent = $total ? round(($laravel / $total) * 100) : 0;
            $dartPercent    = $total ? round(($dartFlutter / $total) * 100) : 0;
        @endphp

        <div class="max-w-7xl mx-auto">

            {{-- العنوان --}}
            <div class="mb-10">
                <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100 mb-2">
                    📊 لوحة التحكم التعليمية
                </h1>
                <p class="text-gray-500 dark:text-gray-400">
                    نظرة شاملة على المحتوى ونِسَب التعلّم
                </p>
            </div>

            {{-- Dashboard Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

                {{-- إجمالي --}}
                <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow border dark:border-gray-700">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-4xl">📚</span>
                        <span class="text-sm text-gray-400">Total</span>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
                        {{ $total }}
                    </h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        مجموع الدروس
                    </p>
                </div>

                {{-- Laravel --}}
                <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow border dark:border-gray-700">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-4xl">🧱</span>
                        <span class="text-sm text-gray-400">{{ $laravelPercent }}%</span>
                    </div>

                    <h3 class="font-bold text-gray-800 dark:text-gray-100 mb-2">
                        Laravel
                    </h3>

                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                        <div class="h-3 rounded-full bg-gradient-to-r from-red-500 to-orange-500"
                             style="width: {{ $laravelPercent }}%"></div>
                    </div>

                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        {{ $laravel }} دروس
                    </p>
                </div>

                {{-- Dart & Flutter --}}
                <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow border dark:border-gray-700">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-4xl">📱</span>
                        <span class="text-sm text-gray-400">{{ $dartPercent }}%</span>
                    </div>

                    <h3 class="font-bold text-gray-800 dark:text-gray-100 mb-2">
                        Dart & Flutter
                    </h3>

                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                        <div class="h-3 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500"
                             style="width: {{ $dartPercent }}%"></div>
                    </div>

                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        {{ $dartFlutter }} دروس
                    </p>
                </div>

            </div>

            {{-- الدروس --}}
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-6">
                📘 الدروس
            </h2>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($lessons as $lesson)
                    <a href="{{ route($lesson['route']) }}"
                       class="
                            group
                            bg-white dark:bg-gray-900
                            rounded-2xl p-6 shadow
                            border dark:border-gray-700
                            hover:scale-[1.02]
                            transition
                       ">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="text-3xl">{{ $lesson['icon'] }}</span>
                            <h3 class="font-bold text-gray-800 dark:text-gray-100">
                                {{ $lesson['title'] }}
                            </h3>
                        </div>

                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            {{ $lesson['desc'] }}
                        </p>

                        <span class="inline-block px-4 py-1 text-xs font-bold text-white rounded-full
                                     bg-gradient-to-r {{ $lesson['color'] }}">
                            دخول
                        </span>
                    </a>
                @endforeach
            </div>

        </div>
    </div>

</x-app-layout>
