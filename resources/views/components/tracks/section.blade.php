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

<section dir="rtl"
    class="py-16 px-4 sm:px-6 lg:px-16
           transition-colors duration-700
           bg-gradient-to-br from-green-100 via-blue-100 to-purple-100
           dark:bg-gray-900">

    <div class="max-w-7xl mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($courses as $course)
            <x-tracks.card :course="$course" />
        @endforeach
    </div>

</section>
