<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>African Choice Holdings ltd</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    @yield('assets')

    <script src="{{ asset('js/app.js') }}"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

    </style>

</head>

<body class="body">
    {{-- <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div> --}}

    @include('layouts.nav')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')



    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>
