<x-app-layout>

    {{-- Header Component --}}
    <x-header.title 
     title="📚 جميع الدروس التعليمية"
    subtitle="مجموعة دروس منظمة ومبسطة لتعلم البرمجة خطوة بخطوة باستخدام أحدث التقنيات."
    />
    <section dir="rtl"
        class="py-12 sm:py-16 lg:py-20
               px-4 sm:px-6 lg:px-16
               transition-colors duration-700
               bg-gradient-to-br from-green-100 via-blue-100 to-purple-100
               dark:bg-gray-900">

        <div class="relative max-w-7xl mx-auto">

            {{-- Lessons Grid --}}
            <x-lesson.grid />

            {{-- Footer Note --}}
            <div class="text-center mt-16 sm:mt-20">
                <p class="text-sm sm:text-base text-gray-700 dark:text-gray-400">
                    🚀 استمر في التعلم، فالمعرفة هي طريقك للاحتراف
                </p>
            </div>

        </div>
    </section>

</x-app-layout>
