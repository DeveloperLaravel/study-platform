<x-guest-layout>
    <div class="w-full max-w-md p-8 bg-white rounded-3xl shadow-2xl transform transition-transform hover:scale-105">
        <div class="flex justify-center mb-6">
            <a href="#">
                <x-application-logo class="w-24 h-24 animate-bounce" />
            </a>
        </div>

        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">تسجيل حساب جديد</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('الاسم')" class="font-semibold text-gray-700"/>
                <x-text-input 
                    id="name" 
                    class="block mt-1 w-full px-4 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition" 
                    type="text" 
                    name="name" 
                    :value="old('name')" 
                    required 
                    autofocus 
                    autocomplete="name" 
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-500"/>
            </div>

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
                    autocomplete="new-password" 
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500"/>
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" class="font-semibold text-gray-700"/>
                <x-text-input 
                    id="password_confirmation" 
                    class="block mt-1 w-full px-4 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition" 
                    type="password" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password" 
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-500"/>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row sm:justify-between items-center mt-6">
                <a class="text-sm text-indigo-600 hover:text-indigo-800 transition mb-3 sm:mb-0" href="{{ route('login') }}">
                    {{ __('هل لديك حساب بالفعل؟ تسجيل الدخول') }}
                </a>

                <x-primary-button class="w-full sm:w-auto px-6 py-2 bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-purple-500 hover:to-indigo-500 text-white font-bold rounded-xl shadow-lg transition-transform transform hover:scale-105">
                    {{ __('تسجيل') }}
                </x-primary-button>
            </div>
        </form>

        <p class="mt-6 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. جميع الحقوق محفوظة.
        </p>
    </div>
</x-guest-layout>
