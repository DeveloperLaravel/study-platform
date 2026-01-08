<div x-data="{ index: 0 }" class="space-y-6">

    <div class="relative rounded-2xl overflow-hidden shadow-xl">
        <template x-for="(video, i) in [
            'https://www.youtube.com/watch?v=RYjNhg9SB1g&t=32s',
            'https://www.youtube.com/watch?v=nD7UVMDfeZg&list=PLXngueStmWn3-XPFr5N91P7ydrze9u1tA&index=7',
            'https://www.youtube.com/watch?v=TJvLdfEmPQs&list=PLXngueStmWn3-XPFr5N91P7ydrze9u1tA&index=2'
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
