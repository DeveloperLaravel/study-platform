<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-full max-w-md p-8 bg-white rounded-3xl shadow-2xl transform transition-transform hover:scale-105">
        <div class="flex justify-center mb-6">
            <a href="/">
                <x-application-logo class="w-24 h-24 animate-bounce" />
            </a>
        </div>

        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">تسجيل الدخول</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-center text-green-600" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('البريد الإلكتروني')" class="font-semibold text-gray-700"/>
                <x-text-input 
                    id="email" 
                    class="block mt-1 w-full px-4 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus 
                    autocomplete="username" 
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500"/>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('كلمة المرور')" class="font-semibold text-gray-700"/>
                <x-text-input 
                    id="password" 
                    class="block mt-1 w-full px-4 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password" 
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500"/>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" name="remember">
                <label for="remember_me" class="ms-2 text-gray-700 text-sm">{{ __('تذكرني') }}</label>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row sm:justify-between items-center mt-6">
                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-800 transition mb-3 sm:mb-0" href="{{ route('password.request') }}">
                        {{ __('نسيت كلمة المرور؟') }}
                    </a>
                @endif

                <x-primary-button class="w-full sm:w-auto px-6 py-2 bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-purple-500 hover:to-indigo-500 text-white font-bold rounded-xl shadow-lg transition-transform transform hover:scale-105">
                    {{ __('تسجيل الدخول') }}
                </x-primary-button>
            </div>
        </form>

        <p class="mt-6 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. جميع الحقوق محفوظة.
        </p>
    </div>

</x-guest-layout>
