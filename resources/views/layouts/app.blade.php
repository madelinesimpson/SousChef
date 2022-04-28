<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SousChef</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/nav.js') }}" defer></script>
    <script src="{{ asset('js/text.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

    <body>
    <header>
            <nav class="font-playfair-display fixed w-full">
            <div class="relative bg-green-600 saturate-50 flex justify-between items-center py-4 px-8 shadow-lg text-amber-50">
                <div class="flex items-center">
                    @if(Auth::check())
                        <button class="side-menu-button">
                            <img src = "{{ URL::to('/') }}/images/avatar.png" width = "40" height = "40" class="rounded-full">
                        </button>
                    @else
                        <button class="side-menu-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    @endif
                </div>
                <div class="flex items-center">
                    <a href="{{route('home')}}" class="-mr-64 font-bold text-3xl">SousChef</a>
                </div>
                <div class="flex items-center -ml-16">
                    <form method = "GET" action = "#">
                    <input
                        type="text"
                        name="search"
                        class="form-control block w-full px-3 py-1.5 text-base font-bold text-gray-200 bg-white bg-clip-padding border border-solid border-gray-300
                        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Search"/>
                    </form>
                    <div class="pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>
                <div class="flex h-screen top-0 left-0">
                    <div class="side-bar bg-amber-100 shadow-lg saturate-50 text-green-600 font-sora text-md w-1/6 aboslute inset-y-0 left-0
    transform -translate-x-full transition duration:200 ease-in-out flex flex-col items-center pt-14">
                        @if (Auth::check())
                            <a class="-mt-6 py-4" href="{{route('home')}}">HOME</a>
                            <hr class="bg-green-600" style="width:50%; margin:0 auto; height: 4px;">
                            <a href="{{'/profile/'. auth()->user()->id }}"class="mt-2 py-4">MY RECIPES</a>
                        @else
                            <a href="{{route('login')}}" class="-mt-6 py-4">LOGIN/REGISTER</a>
                        @endif
                        <a href="#" class="py-4">EXPLORE RECIPES</a>
                        <a href="/recipe/create" class="py-4">UPLOAD RECIPE</a>
                        @if(Auth::check())
                            <a href="{{route('logout')}}"class="py-4">LOGOUT</a>
                        @endif

                    </div>
                </div>
            </nav>
    </header>
    @yield('content')
    </body>
</html>
