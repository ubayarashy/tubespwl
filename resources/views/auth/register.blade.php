<x-guest-layout>
    <div class="flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">MENTOR Kita</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Username -->
                <div class="mb-4">
                    <x-input-label for="username" :value="__('Username')" class="text-gray-700" />
                    <x-text-input id="username" class="block w-full mt-1 p-2 bg-gray-200 border border-gray-300 rounded-md focus:border-blue-300 focus:ring-0" type="text" name="username" :value="old('username')" required autofocus />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                    <x-text-input id="password" class="block w-full mt-1 p-2 bg-gray-200 border border-gray-300 rounded-md focus:border-blue-300 focus:ring-0" type="password" name="password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Verification Password -->
                <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Verification Password')" class="text-gray-700" />
                    <x-text-input id="password_confirmation" class="block w-full mt-1 p-2 bg-gray-200 border border-gray-300 rounded-md focus:border-blue-300 focus:ring-0" type="password" name="password_confirmation" required />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Tombol Daftar -->
                <div class="mb-4">
                    <x-primary-button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 rounded-md">
                        {{ __('DAFTAR') }}
                    </x-primary-button>
                </div>

                <!-- Teks Sudah Punya Akun -->
                <p class="text-center text-sm text-gray-600">
                    Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Masuk yuk!</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>