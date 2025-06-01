<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Laravel Breeze --}}
</head>
<body class="min-h-screen flex items-center justify-center px-4" 
      style="background: url('{{ asset('images/bg.png') }}') no-repeat center center fixed; background-size: cover;">

   <div class="bg-white p-6 rounded-[30px] shadow-lg w-full max-w-md">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <a href="/">
                <img src="{{ asset('images/tes.png') }}" alt="Mentor Kita Logo" class="w-24 h-24" />
            </a>
        </div>

        <!-- Form Register hanya input username & password, tapi tombol daftar diarahkan ke login -->
      <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Email -->
    <div class="mb-4">
        <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
        <x-text-input id="email" class="block w-full mt-1 p-2 bg-gray-200 border border-gray-300 rounded-[100px] focus:border-blue-300 focus:ring-0"
            type="email" name="email" :value="old('email')" required autofocus />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mb-4">
        <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
        <x-text-input id="password" class="block w-full mt-1 p-2 bg-gray-200 border border-gray-300 rounded-[30px] focus:border-blue-300 focus:ring-0"
            type="password" name="password" required />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Konfirmasi Password -->
    <div class="mb-4">
        <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="text-gray-700" />
        <x-text-input id="password_confirmation" class="block w-full mt-1 p-2 bg-gray-200 border border-gray-300 rounded-[30px] focus:border-blue-300 focus:ring-0"
            type="password" name="password_confirmation" required />
    </div>

    <!-- Tombol DAFTAR -->
    <div class="mb-4 flex justify-center">
        <x-primary-button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white font-bold py-2 px-16 rounded-[30px]">
            {{ __('DAFTAR') }}
        </x-primary-button>
    </div>

    <!-- Teks Sudah Punya Akun -->
    <p class="text-center text-sm text-gray-600">
        Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Masuk yuk!</a>
    </p>
</form>

   </div>
</body>
</html>
