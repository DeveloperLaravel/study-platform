@php
$features = [
    ['title'=>'MVC Architecture','desc'=>'فصل منظم بين المنطق والواجهة وقاعدة البيانات'],
    ['title'=>'Security','desc'=>'حماية مدمجة ضد XSS و CSRF و SQL Injection'],
    ['title'=>'Eloquent ORM','desc'=>'التعامل مع قواعد البيانات بسهولة وأناقة'],
];
@endphp

<div class="grid md:grid-cols-3 gap-8">
    @foreach($features as $feature)
        <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur
                    p-8 rounded-2xl shadow-lg hover:scale-105 transition">
            <h3 class="text-2xl font-bold text-red-600 mb-3">
                {{ $feature['title'] }}
            </h3>
            <p class="text-gray-700 dark:text-gray-300">
                {{ $feature['desc'] }}
            </p>
        </div>
    @endforeach
</div>
