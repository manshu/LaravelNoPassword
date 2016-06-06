<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body id="app">
@include('partials.navbar')
    @yield('content')
@include('partials.footer')
</body>
</html>