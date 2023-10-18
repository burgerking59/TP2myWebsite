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
            <h1 class="text-3xl">{{ config('app.name') }}</h1>
            <div class="w-full max-md:flex max-md:justify-end">
                <div class="flex justify-around max-md:hidden text-xl">
                    <h2>Search</h2>
                    <h2>About Us</h2>
                    <h2>Wishlist</h2>
                    <h2>Profile</h2>
                    <h2">Basket</h2>
                </div>
            </div>
        </header>
        @yield('content')
    </body>
</html>