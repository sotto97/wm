<!doctype html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-current">
    {{--
        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
    {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a> -->

                <div class="bg-black" aria-labelledby="">
                    <a class="text-white hover:bg-indigo-500 hover:no-underline" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
    </div>
    </nav>
    --}}
    <div id="app">
        <nav class="w-full navbar-expand-md h-auto bg-black text-white">
            <div class="flex justify-between ">
                <div class="w-1/3 h-12 text-left">
                    <a href="javascript:history.back()">
                        <i class="fas fa-chevron-left px-4 py-2 m-2"></i>
                    </a>
                </div>
                <div class="w-1/3 h-12 text-center">
                    <a class="text-white hover:no-underline" href="{{ url('/') }}">
                        <p class="px-4 py-1 m-2">{{ config('app.name', 'Laravel') }}</p>
                    </a>
                </div>
                @guest
                <div class="w-1/3 h-12 text-right">
                    <div class="flex px-4 py-1 m-2">
                        <div class="w-1/3">
                        </div>
                        <div class="w-1/3">
                            <a class="text-white hover:no-underline" href="{{ route('login') }}">
                                <p>ログイン</p>
                            </a>
                        </div>
                        <div class="w-1/3">
                            @if (Route::has('register'))
                            <a class="text-white hover:no-underline" href="{{ route('register') }}">
                                <p>新規登録</p>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @else
                <div class="w-1/3 h-12 text-right">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="text-white hover:no-underline" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <p class=" px-4 py-1 m-2">ログアウト</p>
                        </a>
                    </form>
                </div>
                @endguest
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>