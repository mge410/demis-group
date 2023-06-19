<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    @vite('resources/js/app.js')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <footer>
        <div>
            &copy; 2023 Все права защищены.
        </div>
    </footer>
</body>
</html>
