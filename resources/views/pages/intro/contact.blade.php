<x-app-layout>
<section dir="rtl" 
    :class="dark 
        ? 'bg-gray-900/90 text-yellow-300' 
        : 'bg-gradient-to-br from-green-100 via-blue-100 to-purple-100 text-gray-900'"
    class="relative py-16 sm:py-20 lg:py-28 px-4 sm:px-6 lg:px-16 transition-colors duration-700">

    {{-- Title --}}
    <div class="text-center mb-14 sm:mb-16 transition-colors duration-500">
        <h1 :class="dark ? 'text-yellow-400' : 'text-gray-900'"
            class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4 transition-colors duration-500">
            تواصل معنا
        </h1>

        <p :class="dark ? 'text-gray-300' : 'text-gray-700'"
           class="text-base sm:text-lg md:text-xl max-w-2xl mx-auto leading-relaxed transition-colors duration-500">
            يسعدنا تواصلك معنا في أي وقت، سواء كان لديك استفسار،
            اقتراح، أو رغبة في التعاون.
        </p>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">

        {{-- Contact Info --}}
        <div :class="dark 
            ? 'bg-gray-800/90 text-gray-300' 
            : 'bg-white/80 text-gray-900'"
             class="p-6 sm:p-8 rounded-3xl shadow-xl backdrop-blur-md transition-colors duration-500">

            <h2 :class="dark ? 'text-yellow-300' : 'text-gray-900'"
                class="text-xl sm:text-2xl font-bold mb-6 transition-colors duration-500">
                معلومات التواصل
            </h2>

            <ul class="space-y-6 text-base sm:text-lg transition-colors duration-500">
                <li class="flex items-center gap-4">
                    <span>📧</span>
                    <span>hnarfr20063@gmail.com</span>
                </li>

                <li class="flex items-center gap-4">
                    <span>📞</span>
                    <span>54 00 489  93  218  +</span>
                </li>

                <li class="flex items-center gap-4">
                    <span>📍</span>
                    <span>ليبيا – الواحات/جالو</span>
                </li>
            </ul>
            <p class="mt-8 leading-relaxed transition-colors duration-500">
                نؤمن بأن التواصل هو الخطوة الأولى نحو بناء شيء مميز،
                لا تتردد في مراسلتنا وسنرد عليك في أقرب وقت ممكن.
            </p>
        </div>

        {{-- Contact Form --}}
        <div :class="dark 
            ? 'bg-gray-800/90 text-gray-300' 
            : 'bg-white/90 text-gray-900'"
             class="p-6 sm:p-8 rounded-3xl shadow-xl backdrop-blur-md transition-colors duration-500">

            <h2 :class="dark ? 'text-yellow-300' : 'text-gray-900'"
                class="text-xl sm:text-2xl font-bold mb-6 transition-colors duration-500">
                أرسل رسالة
            </h2>

            <form method="POST" action="{{ route('contact.send') }}" class="space-y-5">
    @csrf

    {{-- الاسم --}}
    <div>
        <label class="block mb-2">الاسم</label>
        <input type="text" name="name" value="{{ old('name') }}"
            :class="dark
                ? 'bg-gray-700 border-gray-600 text-white placeholder-gray-300 focus:ring-yellow-400'
                : 'bg-white border-gray-300 text-gray-900 placeholder-gray-500 focus:ring-green-400'"
            placeholder="ادخل اسمك"
            class="w-full px-4 py-3 rounded-xl border focus:outline-none focus:ring-2 transition-colors duration-500">
        @error('name')
            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
        @enderror
    </div>

    {{-- البريد الإلكتروني --}}
    <div>
        <label class="block mb-2">البريد الإلكتروني</label>
        <input type="email" name="email" value="{{ old('email') }}"
            :class="dark
                ? 'bg-gray-700 border-gray-600 text-white placeholder-gray-300 focus:ring-yellow-400'
                : 'bg-white border-gray-300 text-gray-900 placeholder-gray-500 focus:ring-green-400'"
            placeholder="example@mail.com"
            class="w-full px-4 py-3 rounded-xl border focus:outline-none focus:ring-2 transition-colors duration-500">
        @error('email')
            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
        @enderror
    </div>


     {{-- الاسم --}}
    <div>
        <label class="block mb-2">المقترح</label>
        <input type="text" name="subject" value="{{ old('subject') }}"
            :class="dark
                ? 'bg-gray-700 border-gray-600 text-white placeholder-gray-300 focus:ring-yellow-400'
                : 'bg-white border-gray-300 text-gray-900 placeholder-gray-500 focus:ring-green-400'"
            placeholder="عنوان النص"
            class="w-full px-4 py-3 rounded-xl border focus:outline-none focus:ring-2 transition-colors duration-500">
        @error('subject')
            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
        @enderror
    </div>

    {{-- الرسالة --}}
    <div>
        <label class="block mb-2">الرسالة</label>
        <textarea name="message" rows="5" placeholder="اكتب رسالتك هنا..." 
            :class="dark
                ? 'bg-gray-700 border-gray-600 text-white placeholder-gray-300 focus:ring-yellow-400'
                : 'bg-white border-gray-300 text-gray-900 placeholder-gray-500 focus:ring-green-400'"
            class="w-full px-4 py-3 rounded-xl border focus:outline-none focus:ring-2 transition-colors duration-500">{{ old('subject') }}</textarea>
        @error('message')
            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
        @enderror
    </div>

    {{-- زر الإرسال --}}
    <button type="submit"
        :class="dark
            ? 'bg-yellow-400 hover:bg-yellow-300 text-gray-900'
            : 'bg-green-600 hover:bg-green-700 text-white'"
        class="w-full py-3 rounded-full text-lg font-bold transition transform hover:scale-105">
        إرسال الرسالة
    </button>
</form>


        </div>

    </div>
</section>

{{-- SweetAlert للنجاح --}}
           
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'نجاح!',
        text: '{{ session('success') }}',
        timer: 3000,
        timerProgressBar: true,
        showConfirmButton: false
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'خطأ!',
        text: '{{ session('error') }}',
        timer: 3000,
        timerProgressBar: true,
        showConfirmButton: false
    });
</script>
@endif
</x-app-layout>
