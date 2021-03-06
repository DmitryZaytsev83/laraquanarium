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
@include('layouts.partials.nav')
<main>
    <div class="container">@yield('content')</div>
</main>
</body>
</html>
