<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div class="flex flex-col h-screen justify-between">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Scripts -->
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
              integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
              crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

        @yield('scripts-top')
        @yield('styles')

    </head>
    <body>
    <div id="app">

        @include('_partials._primary_nav')

    </div>

    @include('_partials._alerts')
    <alerts-section></alerts-section>
    <main class="flex-grow bg-gray-600">
        @yield('content')
    </main>
    <div class="flex flex-col justify-between">

        <footer class="p-4 bg-white shadow md:px-6 md:py-8 dark:bg-gray-800">
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">&copy; {{date('Y')}} Mike Bros.</span>
        </footer>


    </div>
    @yield('scripts-bottom')
    </body>
</div>
</html>
