<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>
    @include('partials.navbar')
<div class="container">
    @yield('content')
</div>
    @include('partials.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-rc1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
</body>
</html>