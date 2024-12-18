<div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-100 via-white to-blue-100 p-6">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="bg-indigo-500 hover:bg-indigo-600 focus:bg-indigo-600 active:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md shadow-sm">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
