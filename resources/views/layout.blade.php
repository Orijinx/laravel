<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--  BootsTrap CDN--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{----------------------------------------------------------------------------------------------------------------------------}}

    {{--  My CSS--}}
    <link rel="stylesheet" href="./css/style.css">
    {{----------------------------------------------------------------------------------------------------------------------------}}
</head>
<body>
<header>
    <div
        class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Тех-поддержка</h5>
        {{--        <nav class="my-2 my-md-0 mr-md-3">--}}
        {{--            <a class="p-2 text-dark" href="#">Создать тикет</a>--}}
        {{--            <a class="p-2 text-dark" href="#">Посмотреть тикеты</a>--}}
        {{--        </nav>--}}

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn btn-primary" href="{{url('/')}}">Главная</a>
                        <a class="btn btn-primary" href="{{ url('/home') }}">Личный Кабинет</a>

                    @else
                        <a class="btn btn-outline-primary" href="{{ route('login') }}">Вход</a>

                        @if (Route::has('register'))
                            <a class="btn btn-outline-primary" href="{{ route('register') }}">Решистрация</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
</header>
@yield('body')
@yield('content')
@yield('modal-sig')
@yield('modal-log')






{{--BootsTrap JS--}}
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
{{--------------------------------------------------------------------------------------------------}}


</body>
</html>
