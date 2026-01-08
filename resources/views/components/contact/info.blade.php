@props([
    'email' => 'hnarfr20063@gmail.com',
    'phone' => '+218 93 489 0054',
    'address' => 'ليبيا – الواحات / جالو',
])

<div
    class="p-8 rounded-3xl shadow-xl
           bg-white dark:bg-gray-800
           text-gray-800 dark:text-gray-300">

    <h2 class="text-2xl font-bold mb-6
               text-gray-900 dark:text-yellow-400">
        معلومات التواصل
    </h2>

    <ul class="space-y-5 text-lg">
        <li class="flex gap-3">📧 <span>{{ $email }}</span></li>
        <li class="flex gap-3">📞 <span>{{ $phone }}</span></li>
        <li class="flex gap-3">📍 <span>{{ $address }}</span></li>
    </ul>

    <p class="mt-8 leading-relaxed text-gray-600 dark:text-gray-400">
        نؤمن بأن التواصل هو الخطوة الأولى نحو بناء شيء مميز.
    </p>
</div>
