<div class="space-y-6">
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
</div>
