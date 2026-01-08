@php
    $features = [
        ['icon'=>'🚀','title'=>'تعلّم عملي','desc'=>'مشاريع حقيقية تبني خبرتك خطوة بخطوة.'],
        ['icon'=>'👨‍🏫','title'=>'خبراء محترفون','desc'=>'دروس مقدمة من مطورين ذوي خبرة.'],
        ['icon'=>'🤝','title'=>'مجتمع داعم','desc'=>'تفاعل ومشاركة مع متعلمين مثلك.'],
    ];
@endphp

<section dir="rtl"
    class="py-16 px-4 sm:px-6 lg:px-16
           transition-colors duration-700
           bg-white dark:bg-gray-900">

    <h2
        class="text-3xl font-extrabold text-center mb-14
               text-gray-900 dark:text-yellow-400">
        لماذا تختار مساراتنا؟
    </h2>

    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
        @foreach($features as $feature)
            <x-tracks.feature-card :feature="$feature" />
        @endforeach
    </div>

</section>
