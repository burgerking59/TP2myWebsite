<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>{{ config('app.name') }}</title>

    </head>
    <body>
        <header class="bg-mainGreen p-6 grid grid-cols-2 items-center font-bold text-mainText">
            <h1 class="text-3xl"><a href="{{ route('home') }}">{{ config('app.name') }}</a></h1>
            <div class="w-full max-md:flex max-md:justify-end">
                <div class="flex justify-around max-md:hidden text-xl">
                    <h2>Search</h2>
                    <a href="{{ route('about') }}"><h2>About Us</h2></a>
                    <h2>Wishlist</h2>
                    @guest
                        @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                        @endif
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                        @endif
                    @else
                        <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Account') }}</a>
                    @endguest
                    <a class="nav-link" href="{{ route('basket') }}"><h2>Basket</h2></a>
                    <a class="nav-link" href="{{ route('contact') }}"><h2>Contact</h2></a>
                </div>
            </div>
        </header>
        @yield('content')
    </body>
</html>