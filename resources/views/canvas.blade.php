<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<header class="header">
    <h1 class="header__title">Bienvenue dans le site de consultation de vols</h1>
</header>

<ul class="navbar">
    <li class="navbar__item">
        <a href="{{route('home.get')}}" class="navbar__anchor">Accueil</a>
    </li>
    <li class="navbar__item">
        <a href="{{route('flights.get')}}" class="navbar__anchor">Vols</a>
    </li>
    <li class="navbar__item">
        <a href="{{route('searchs.get')}}" class="navbar__anchor">Recherches</a>
    </li>
</ul>

<main class="main">
    @yield('content')
</main>

<footer class="footer">
    <p>WEBG4 - WEBII - BOUTOUIL NASREDDINE - G61453 - JUIN 2024</p>
</footer>

@yield('script')
</body>
</html>
