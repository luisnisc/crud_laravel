<x-layouts.loginRegister-layout titulo="{{ __('Inicia Sesión') }}">
    <x-slot name="formSlot">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email')" class="text-dark_blue" />
                <x-text-input id="email" class="block mt-1 w-full text-dark_blue bg-white border-gray-300" 
                              type="text" name="email" :value="old('email')" 
                              autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-dark_blue" />
                <x-text-input id="password" class="block mt-1 w-full text-dark_blue bg-white border-gray-300"
                              type="password"
                              name="password"
                              autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center text-dark_blue">
                    <input id="remember_me" type="checkbox" 
                           class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                           name="remember">
                    <span class="ms-2 text-sm text-dark_blue">
                        {{ __('Remember me') }}
                    </span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-slot>

    <x-slot name="linkSlot">
        <a href="{{ route('register') }}" 
           class="underline text-sm text-dark_blue hover:text-blue-900">
            <button class="p-3 rounded-xl bg-blue-900 text-white">
                {{ __('Registrate') }}
            </button>
        </a>
    </x-slot>
</x-layouts.loginRegister-layout>