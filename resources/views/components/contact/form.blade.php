<div
    class="p-8 rounded-3xl shadow-xl
           bg-white dark:bg-gray-800">

    <h2 class="text-2xl font-bold mb-6
               text-gray-900 dark:text-yellow-400">
        أرسل رسالة
    </h2>

    <form method="POST" action="{{ route('contact.send') }}" class="space-y-5">
        @csrf

        {{-- الاسم --}}
        <div>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="الاسم"
                class="w-full px-4 py-3 rounded-xl border
                       bg-white dark:bg-gray-700
                       border-gray-300 dark:border-gray-600
                       text-gray-900 dark:text-white
                       placeholder-gray-500 dark:placeholder-gray-300
                       focus:outline-none focus:ring-2
                       focus:ring-green-500 dark:focus:ring-yellow-400">

            @error('name')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        {{-- البريد --}}
        <div>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="البريد الإلكتروني"
                class="w-full px-4 py-3 rounded-xl border
                       bg-white dark:bg-gray-700
                       border-gray-300 dark:border-gray-600
                       text-gray-900 dark:text-white
                       placeholder-gray-500 dark:placeholder-gray-300
                       focus:outline-none focus:ring-2
                       focus:ring-green-500 dark:focus:ring-yellow-400">

            @error('email')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        {{-- الموضوع --}}
        <div>
            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="المقترح"
                class="w-full px-4 py-3 rounded-xl border
                       bg-white dark:bg-gray-700
                       border-gray-300 dark:border-gray-600
                       text-gray-900 dark:text-white
                       placeholder-gray-500 dark:placeholder-gray-300
                       focus:outline-none focus:ring-2
                       focus:ring-green-500 dark:focus:ring-yellow-400">

            @error('subject')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        {{-- الرسالة --}}
        <div>
            <textarea name="message" rows="4" placeholder="اكتب رسالتك هنا..."
                class="w-full px-4 py-3 rounded-xl border
                       bg-white dark:bg-gray-700
                       border-gray-300 dark:border-gray-600
                       text-gray-900 dark:text-white
                       placeholder-gray-500 dark:placeholder-gray-300
                       focus:outline-none focus:ring-2
                       focus:ring-green-500 dark:focus:ring-yellow-400">{{ old('message') }}</textarea>

            @error('message')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        {{-- زر الإرسال --}}
        <button
            class="w-full py-3 rounded-full font-bold text-lg
                   bg-green-600 hover:bg-green-700
                   dark:bg-yellow-400 dark:hover:bg-yellow-300
                   text-white dark:text-gray-900
                   transition transform hover:scale-105">
            إرسال الرسالة
        </button>
    </form>
</div>
