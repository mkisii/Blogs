<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-800 text-sm sm:text-base">
                    <a  class=" text-gray-100 no-underline hover:underline" href="/">
                        Home
                    </a>
                    <a  class="  text-gray-100 no-underline hover:underline" href="/questions">
                        Questions
                    </a>
                    @guest
                        <a class=" text-gray-100 no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="text-gray-100 no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span class="text-gray-100">{{ Auth::user()->name }}</span>
                        @if (Auth::check())
                            <a class="bg-blue-600 uppercase bg-transparent text-gray-100 text-xs font-extrabold px-5 py-3 rounded-3xl" 
                            href="http:/questions/create">
                            Post A Question
                            </a>
                        
                        @endif


                        <a href="{{ route('logout') }}"
                           class="text-gray-100 no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>

            @yield('content')

        </div>

        <div>
            @include('layouts.footer')
        </div>

    
    </div>
</body>
</html>
