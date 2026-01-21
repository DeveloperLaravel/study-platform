<x-app-layout>

    <div
        class="
            min-h-screen
            bg-gradient-to-br
            from-slate-100 via-white to-slate-200
            dark:from-gray-900 dark:via-gray-900 dark:to-gray-800
            py-10 px-4 transition-colors duration-500
        "
    >

        <div class="max-w-5xl mx-auto">

            {{-- العنوان --}}
            <div class="mb-10 text-center">
                <div class="text-5xl mb-4">🔐</div>
                <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100 mb-2">
                    Laravel Sanctum
                </h1>
                <p class="text-gray-500 dark:text-gray-400">
                    نظام تسجيل الدخول والحماية باستخدام API Tokens
                </p>
            </div>

            {{-- ما هو Sanctum --}}
            <section class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow border dark:border-gray-700 mb-6">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-3">
                    ❓ ما هو Laravel Sanctum؟
                </h2>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    Laravel Sanctum هو نظام مصادقة (Authentication) بسيط
                    يُستخدم لحماية الـ API أو التطبيقات التي تعمل بـ
                    <strong>SPA</strong> أو <strong>Mobile Apps</strong>
                    مثل Flutter و Vue و React.
                </p>
            </section>

            {{-- لماذا نستخدمه --}}
            <section class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow border dark:border-gray-700 mb-6">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-3">
                    🎯 لماذا نستخدم Sanctum؟
                </h2>

                <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                    <li>✅ سهل الإعداد للمبتدئين</li>
                    <li>✅ يدعم Web و API معًا</li>
                    <li>✅ مناسب لتطبيقات Flutter و Mobile</li>
                    <li>✅ لا يحتاج OAuth معقّد</li>
                </ul>
            </section>

            {{-- طرق Sanctum --}}
            <section class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow border dark:border-gray-700 mb-6">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                    ⚙️ طرق العمل في Sanctum
                </h2>

                <div class="space-y-4 text-gray-600 dark:text-gray-300">

                    <div>
                        <h3 class="font-bold">1️⃣ Session Authentication</h3>
                        <p class="text-sm">
                            يستخدم للجلسات العادية (Web – SPA)
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold">2️⃣ API Tokens</h3>
                        <p class="text-sm">
                            يستخدم لتطبيقات الموبايل مثل Flutter
                        </p>
                    </div>

                </div>
            </section>

            {{-- متى نستخدم --}}
            <section class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow border dark:border-gray-700 mb-6">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                    🕒 متى أستخدم Sanctum؟
                </h2>

                <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                    <li>📱 تطبيق Flutter أو Mobile</li>
                    <li>🌐 Frontend + Backend منفصل</li>
                    <li>🔑 API محمي بالتوكن</li>
                </ul>
            </section>

            {{-- متى لا نستخدم --}}
            <section class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow border dark:border-gray-700 mb-6">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                    🚫 متى لا أستخدم Sanctum؟
                </h2>

                <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                    <li>❌ تسجيل دخول اجتماعي (Google – Facebook)</li>
                    <li>❌ OAuth معقد</li>
                </ul>
            </section>

            {{-- التثبيت --}}
            <section class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow border dark:border-gray-700 mb-6">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                    📦 تثبيت Sanctum
                </h2>

                <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded-xl text-sm overflow-x-auto">
composer require laravel/sanctum
                </pre>

                <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded-xl text-sm overflow-x-auto mt-3">
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
                </pre>

                <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded-xl text-sm overflow-x-auto mt-3">
php artisan migrate
                </pre>
            </section>

            {{-- إنشاء توكن --}}
            <section class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow border dark:border-gray-700 mb-6">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                    🔑 إنشاء API Token
                </h2>

                <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded-xl text-sm overflow-x-auto">
$token = $user->createToken('mobile')->plainTextToken;
                </pre>
            </section>

            {{-- استخدام التوكن --}}
            <section class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow border dark:border-gray-700 mb-6">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                    📡 استخدام التوكن في الطلبات
                </h2>

                <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded-xl text-sm overflow-x-auto">
Authorization: Bearer YOUR_TOKEN_HERE
                </pre>
            </section>

            {{-- حماية المسارات --}}
            <section class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow border dark:border-gray-700 mb-10">
                <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                    🛡️ حماية Routes
                </h2>

                <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded-xl text-sm overflow-x-auto">
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
                </pre>
            </section>

            {{-- روابط --}}
            <section class="text-center">
                <a
                    href="https://laravel.com/docs/sanctum"
                    target="_blank"
                    class="
                        inline-block
                        px-6 py-3 rounded-xl
                        text-white font-bold
                        bg-gradient-to-r from-indigo-500 to-purple-600
                        hover:scale-105 transition
                    ">
                    📚 التوثيق الرسمي
                </a>
            </section>

        </div>
    </div>

</x-app-layout>
