<!doctype html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header class="bg-dark text-white p-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('calculator') }}" class="nav-link px-2 text-white">Калькулятор</a></li>
                    <li><a href="{{ route('calculator.about') }}" class="nav-link px-2 text-white">О проекте</a></li>
                </ul>
                <ul class="nav col-12 col-lg-auto ms-lg-auto mb-2 justify-content-center mb-md-0">
                    @guest
                    <li><a href="calculator.login" class="nav-link px-2 text-white">Войти</a></li>
                    <li><a href="calculator.register" class="nav-link px-2 text-white">Регистрация</a></li>
                    @else
                        <li><a href="" class="nav-link px-2 text-white">Профиль: {{ Auth::user()->name }}</a></li>
                        <li>
                            <a class="nav-link px-2 text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </header>
    @yield('content')
</body>
</html>
