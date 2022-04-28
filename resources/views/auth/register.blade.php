@extends('layouts.app')

@section('content')
    <div class="flex flex-col bg-amber-50 h-screen justify-center items-center font-sora">
        <form class="w-1/4 shadow-md rounded-lg px-16 py-16 bg-white" method="POST" action="{{route('register')}}" style="z-index: 1000 !important;">
            @csrf
            <header class="flex justify-center items-center text-green-700 -mt-6 pb-10 text-xl font-light">Register</header>
            <div class="flex flex-wrap">
                <label for="username" class="block text-green-700 mb-2">
                    {{ __('Username') }}:
                </label>

                <input id="username" type="text" class="form-input w-full mb-5 p-3 shadow-sm border @error('username')  border-red-500 @enderror"
                       name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="flex flex-wrap">
                <label for="email" class="block text-green-700 mb-2">
                    {{ __('E-Mail Address') }}:
                </label>
                <input id="email" type="email"
                       class="form-input w-full mb-5 p-3 shadow-sm border @error('email') border-red-500 @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="password" class="block text-green-700 mb-2">
                    {{ __('Password') }}:
                </label>
                <input id="password" type="password"
                       class="form-input w-full p-3 mb-5 shadow-sm border @error('password') border-red-500 @enderror" name="password"
                       required>
                @error('password')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="flex flex-wrap">
                <label for="password-confirm" class="block text-green-700 mb-2">
                    {{ __('Confirm Password') }}:
                </label>

                <input id="password-confirm" type="password" class="form-input w-full mb-5 p-3 shadow-sm border"
                       name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="flex flex-wrap">
                <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                    {{ __('Register') }}
                </button>

        </form>
        <a href="{{route('login')}}" class="pt-5 text-sm text-blue-700 hover:underline" style="z-index: 1000 !important;">Already Have An Account?</a>

    </div>

@endsection

