<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    @include('layout.includes.header')
    <main>@yield('main')</main>
    @include('layout.includes.footer')
</body>
</html>
