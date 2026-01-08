<x-app-layout>

<x-hero.hero-section
    title="نؤمن أن التعلّم الحقيقي"
    highlight="يبدأ من الفهم"
    description="في عصر التحوّل الرقمي، أصبحت البرمجة لغة العصر وأحد أهم المهارات التي تفتح أبواب المستقبل.">

    <x-slot:actions>
        <a href="{{ route('lessons') }}"
           class="px-7 sm:px-8 py-3 sm:py-4 rounded-full
                      text-base sm:text-lg font-semibold
                      shadow-lg transition-all duration-300
                      transform hover:-translate-y-1 hover:scale-105
                      bg-green-600 text-white hover:bg-green-700
                      dark:bg-yellow-400 dark:text-gray-900 dark:hover:bg-yellow-300">
            ابدأ التعلم
        </a>

        <a href="{{ route('register') }}"
           class="px-7 sm:px-8 py-3 sm:py-4 rounded-full
                      text-base sm:text-lg font-semibold
                      border-2 transition-all duration-300
                      transform hover:-translate-y-1 hover:scale-105
                      border-blue-600 text-blue-600 hover:bg-blue-100
                      dark:border-yellow-400 dark:text-yellow-300 dark:hover:bg-gray-800">
            تسجيل مستخدم
        </a>
    </x-slot:actions>

</x-hero-section>


<x-hero.features-section>

    <x-hero.feature-card
        image="3.png"
        title="تطوير التطبيقات متعددة المنصات"
        description="Flutter إطار عمل حديث من Google لبناء التطبيقات من كود واحد."
        route="pagedart" />

    <x-hero.feature-card
        image="2.png"
        title="Laravel الخيار الذكي للويب"
        description="إطار PHP أنيق وسريع لبناء تطبيقات ويب حديثة."
        route="pagephp" />

    <x-hero.feature-card
        image="5.png"
        title="صناعة الألعاب باستخدام Unity"
        description="محرك ألعاب احترافي لإنشاء ألعاب ثنائية وثلاثية الأبعاد."
        route="pageunity" />

</x-hero.features-section>

</x-app-layout>
