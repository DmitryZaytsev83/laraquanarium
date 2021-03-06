<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>
    <title>Акванариум - @yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom
shadow-sm mb-3">
    <div class="container">
        <a class="navbar-brand"
           href="{{ route('home.index') }}">
            <img class="img-fluid" style="max-height: 55px"
                 src="/images/logo.png"
                 alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end"
             id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link"
                       href="{{ route('home.index') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home.photo') }}">Фото</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home.video') }}">Видео</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home.excursions') }}">Экскурсии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home.school') }}">Школа</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home.courses') }}">Курсы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home.events') }}">Мероприятия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home.about') }}">О&nbsp;нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="http://аквариф.рф">Купить&nbsp;аквариум</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div class="container">@yield('content')</div>
</main>
</body>
</html>
