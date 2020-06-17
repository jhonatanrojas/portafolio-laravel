<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','curso')</title>
    <style>


    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <script src=" {{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div id="app" class="d-flex flex-column h-screem justify-content-between ">

        <header>

            @include('partials.nav')
            @include('partials.session-status')

        </header>

        <main class="py-3">

            @yield('content')

        </main>

        <footer class="bg-white text-black-50 text-center py-3 shadow ">
            {{ config('app.name') }} | Copyright {{ date('Y') }}
        </footer>

    </div>
</body>

</html>