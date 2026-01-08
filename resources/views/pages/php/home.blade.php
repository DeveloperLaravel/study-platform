<x-app-layout>
{{-- <section dir="rtl"
    class="relative min-h-screen overflow-hidden
           bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50
           dark:from-gray-900 dark:via-gray-900 dark:to-black
           transition-colors duration-700">

    {{-- خلفية متحركة --}}
    {{-- <div class="absolute inset-0 opacity-30 blur-3xl">
        <div class="absolute top-10 right-10 w-96 h-96 bg-red-400 rounded-full"></div>
        <div class="absolute bottom-10 left-10 w-96 h-96 bg-yellow-400 rounded-full"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-16 py-20 space-y-24">

        {{-- العنوان --}}
        {{-- <div class="text-center space-y-6">
            <h1 class="text-5xl md:text-6xl font-extrabold text-red-600 dark:text-red-400">
                Laravel Framework
            </h1>
            <p class="text-xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
                Laravel هو إطار عمل PHP حديث وأنيق يساعدك على بناء تطبيقات ويب قوية، آمنة، وسريعة
                باستخدام أفضل الممارسات البرمجية.
            </p>
        </div> --}}

        {{-- فيديوهات دوّارة --}}
        {{-- <div x-data="{ index: 0 }" class="space-y-6">

            <div class="relative rounded-2xl overflow-hidden shadow-xl">
                <template x-for="(video, i) in [
                    'https://www.youtube.com/embed/ImtZ5yENzgE',
                    'https://www.youtube.com/embed/MFh0Fd7BsjE',
                    'https://www.youtube.com/embed/9jYz5c5aV6Y'
                ]" :key="i">
                    <iframe x-show="index === i"
                        class="w-full h-[220px] sm:h-[360px] md:h-[480px]"
                        :src="video"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </template>
            </div>

            <div class="flex justify-center gap-3">
                <template x-for="i in 3">
                    <button @click="index = i-1"
                        :class="index === i-1 ? 'bg-red-600' : 'bg-gray-300 dark:bg-gray-600'"
                        class="w-4 h-4 rounded-full transition"></button>
                </template>
            </div>
        </div>

        {{-- لماذا Laravel --}}
      {{--    <div class="grid md:grid-cols-3 gap-8">
            @php
                $features = [
                    ['title'=>'MVC Architecture','desc'=>'فصل منظم بين المنطق والواجهة وقاعدة البيانات'],
                    ['title'=>'Security','desc'=>'حماية مدمجة ضد XSS و CSRF و SQL Injection'],
                    ['title'=>'Eloquent ORM','desc'=>'التعامل مع قواعد البيانات بسهولة وأناقة'],
                ];
            @endphp

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
        </div> --}} 

        {{-- مثال كود --}}
        {{-- <div class="space-y-6">
            <h2 class="text-4xl font-bold text-center text-gray-800 dark:text-gray-100">
                مثال بسيط في Laravel
            </h2>

            <div x-data="{ copied:false }"
                 class="relative bg-gray-900 text-gray-100 rounded-2xl p-6 font-mono text-sm overflow-x-auto">

<pre><code id="code">
Route::get('/hello', function () {
    return response()->json([
        'message' => 'Welcome to Laravel'
    ]);
});
</code></pre>

                <button
                    @click="
                        navigator.clipboard.writeText(
                            document.getElementById('code').innerText
                        );
                        copied=true;
                        setTimeout(()=>copied=false,1500);
                    "
                    class="absolute top-4 left-4 bg-red-600 hover:bg-red-700
                           text-white px-4 py-2 rounded-lg text-sm">
                    نسخ الكود
                </button>

                <span x-show="copied"
                      class="absolute top-4 right-4 text-green-400 text-sm">
                    ✔ تم النسخ
                </span>
            </div>
        </div> --}}

        {{-- دعوة --}}
    {{-- دعوة      <div class="text-center space-y-6">
            <h2 class="text-4xl font-extrabold text-red-600">
                هل أنت مستعد لتعلم Laravel؟
            </h2>
            <p class="text-lg text-gray-700 dark:text-gray-300">
                ابدأ الآن ببناء تطبيقات احترافية باستخدام Laravel خطوة بخطوة
            </p>
            <a href="#"
               class="inline-block px-10 py-4 rounded-full text-lg font-bold
                      bg-red-600 hover:bg-red-700 text-white transition">
                ابدأ التعلم الآن 🚀
            </a>
        </div>

    </div>
</section> --}}

<section dir="rtl"
    class="relative min-h-screen overflow-hidden
           bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50
           dark:from-gray-900 dark:via-gray-900 dark:to-black
           transition-colors duration-700">

    {{-- خلفية --}}
    <div class="absolute inset-0 opacity-30 blur-3xl">
        <div class="absolute top-10 right-10 w-96 h-96 bg-red-400 rounded-full"></div>
        <div class="absolute bottom-10 left-10 w-96 h-96 bg-yellow-400 rounded-full"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-16 py-20 space-y-24">

        <x-php-lesson.hero />

        <x-php-lesson.video-carousel />

        <x-php-lesson.features />

        <x-php-lesson.code-sample />

        <x-php-lesson.cta />

    </div>
</section>
</x-app-layout>
