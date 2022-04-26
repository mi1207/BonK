<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    <link rel="stylesheet" href="{{ asset('css/booklist.css') }}">
    <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body class="mx-24">
    <header>
    @include('header')
    </header>
    <div class="wrapper">
    @yield('content')
    </div>
    <footer>
    @include('footer')
    </footer>
</body>
</html>
