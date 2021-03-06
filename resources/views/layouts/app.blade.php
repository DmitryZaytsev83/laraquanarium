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
<nav>
    <a href="{{ route('home.index') }}">Главная</a>
    <a href="{{ route('home.photo') }}">Фото</a>
    <a href="{{ route('home.video') }}">Видео</a>
    <a href="{{ route('home.excursions') }}">Экскурсии</a>
    <a href="{{ route('home.school') }}">Школа</a>
    <a href="{{ route('home.courses') }}">Курсы</a>
    <a href="{{ route('home.events') }}">Мероприятия</a>
    <a href="{{ route('home.about') }}">О&nbsp;нас</a>
    <a href="http://аквариф.рф">Купить&nbsp;аквариум</a>
</nav>
<div>@yield('content')</div>
</body>
</html>
