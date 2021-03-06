<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aquanarium - @yield('title')</title>
</head>
<body>
<nav>
    <a href="{{ route('home.index') }}">Home</a>
    <a href="{{ route('home.photo') }}">Photo</a>
    <a href="{{ route('home.video') }}">Video</a>
    <a href="{{ route('home.excursions') }}">Excursions</a>
    <a href="{{ route('home.school') }}">School</a>
    <a href="{{ route('home.courses') }}">Courses</a>
    <a href="{{ route('home.events') }}">Events</a>
    <a href="{{ route('home.about') }}">About</a>
    <a href="http://аквариф.рф">Купить аквариум</a>
</nav>
<div>@yield('content')</div>
</body>
</html>
