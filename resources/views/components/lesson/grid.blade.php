@php
    $lessons = [
        [
            'title' => 'مقدمة في Laravel',
            'desc'  => 'تعرف على أساسيات Laravel وبنية المشروع.',
            'icon'  => '🧱',
            'route' => 'lessons',
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
            'route' => 'lessons',
            'color' => 'from-cyan-500 to-blue-500',
        ],
        [
            'title' => 'Flutter UI',
            'desc'  => 'تصميم واجهات جميلة باستخدام Flutter.',
            'icon'  => '📱',
            'route' => 'lessons',
            'color' => 'from-purple-500 to-pink-500',
        ],
        [
            'title' => 'Bloc & State Management',
            'desc'  => 'إدارة الحالة بطريقة احترافية.',
            'icon'  => '⚙️',
            'route' => 'lessons',
            'color' => 'from-yellow-500 to-orange-500',
        ],
    ];
@endphp

<div class="grid gap-6 sm:gap-8
            grid-cols-1
            sm:grid-cols-2
            lg:grid-cols-3">
    @foreach($lessons as $lesson)
        <x-lesson.card :lesson="$lesson" />
    @endforeach
</div>
