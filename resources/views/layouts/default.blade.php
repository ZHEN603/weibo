<!DOCTYPE html>
<html>
<head>
    <title>Weibo-@yield('title','App')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="offset-md-1 col-md-10">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
</body>
</html>
