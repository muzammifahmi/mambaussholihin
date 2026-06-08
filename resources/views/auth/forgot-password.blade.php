<x-guest-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold bg-white shadow text-xl text-gray-800 leading-tight rounded-lg px-4 py-2">
            {{ __('Lupa Password') }}
        </h2>
    </x-slot> --}}


<div class="py-24 flex item-center justify-center inline-block">
    <div class="flex flex-col bg-white sm:justify-center items-center pt-6 sm:pt-0 py-6">
            <div class="mb-4 text-sm text-gray-600 px-4 max-w-lg mx-auto m-4 text-justify">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset') }}
            </x-primary-button>
        </div>
    </form>
    </div>
</div>


</x-guest-layout>
