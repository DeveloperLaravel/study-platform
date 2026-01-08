<x-app-layout>

       <!-- عنوان الصفحة -->
    <header
        class="text-center py-14 transition-colors duration-700
               bg-gradient-to-r from-green-400 via-blue-400 to-purple-500
               dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">

        <h1 class="text-4xl md:text-5xl font-extrabold
                   text-gray-900 dark:text-yellow-400 mb-3">
            تواصل معنا

        </h1>

        <p class="text-lg md:text-xl
                  text-gray-800 dark:text-gray-300">
         يسعدنا تواصلك معنا في أي وقت، سواء كان لديك استفسار أو اقتراح.

        </p>
    </header>
<section dir="rtl"
    class="py-20 px-4 sm:px-6 lg:px-16
           bg-gray-50 dark:bg-gray-900
           transition-colors duration-500">

  

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10">

        <!-- معلومات التواصل -->
        <div
            class="p-8 rounded-3xl shadow-xl
                   bg-white dark:bg-gray-800
                   text-gray-800 dark:text-gray-300">

            <h2 class="text-2xl font-bold mb-6
                       text-gray-900 dark:text-yellow-400">
                معلومات التواصل
            </h2>

            <ul class="space-y-5 text-lg">
                <li class="flex gap-3">📧 <span>hnarfr20063@gmail.com</span></li>
                <li class="flex gap-3">📞 <span>+218 93 489 0054</span></li>
                <li class="flex gap-3">📍 <span>ليبيا – الواحات / جالو</span></li>
            </ul>

            <p class="mt-8 leading-relaxed text-gray-600 dark:text-gray-400">
                نؤمن بأن التواصل هو الخطوة الأولى نحو بناء شيء مميز.
            </p>
        </div>

        <!-- النموذج -->
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
            <p class="mt-1 text-sm text-red-600 dark:text-red-400">
                {{ $message }}
            </p>
        @enderror
    </div>

    {{-- البريد الإلكتروني --}}
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
            <p class="mt-1 text-sm text-red-600 dark:text-red-400">
                {{ $message }}
            </p>
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
            <p class="mt-1 text-sm text-red-600 dark:text-red-400">
                {{ $message }}
            </p>
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
            <p class="mt-1 text-sm text-red-600 dark:text-red-400">
                {{ $message }}
            </p>
        @enderror
    </div>

    {{-- زر الإرسال --}}
    <button type="submit"
        class="w-full py-3 rounded-full font-bold text-lg
               bg-green-600 hover:bg-green-700
               dark:bg-yellow-400 dark:hover:bg-yellow-300
               text-white dark:text-gray-900
               transition transform hover:scale-105">
        إرسال الرسالة
    </button>
</form>

        </div>

    </div>
</section>

{{-- SweetAlert للنجاح --}}
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
 @if(session('success')) <script> Swal.fire({ icon: 'success', title: 'نجاح!', text: '{{ session('success') }}', timer: 3000, timerProgressBar: true, showConfirmButton: false }); </script> @endif 
 @if(session('error')) <script> Swal.fire({ icon: 'error', title: 'خطأ!', text: '{{ session('error') }}', timer: 3000, timerProgressBar: true, showConfirmButton: false }); </script> @endif







</x-app-layout>
