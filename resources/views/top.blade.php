<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-current">
    <div class="flex h-screen">
        <div class="m-auto w-full">
            <div class="flex">
                <div class="w-1/2 justify-center">
                    <img class="w-3/5 mx-auto" src="{{ asset('img/healthy.svg') }}">
                </div>
                <div class="w-1/2 inline-block m-auto text-center">
                    <div>
                        <p class="text-white text-xl">Workout Management</p>
                    </div>
                    <div>
                        <a href="{{ route('login') }}">
                            <button class="w-2/5 mt-3 p-2 text-lg rounded-full bg-indigo-600 text-white">ログイン</button>
                        </a>
                    </div>
                    <div>
                        <a href="{{ route('register') }}">
                            <button class="w-2/5 mt-3 p-2 text-lg rounded-full bg-teal-600 text-white">新規登録</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>