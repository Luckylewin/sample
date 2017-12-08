<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
     @include('layouts._header')

    <div class="container">
        <div class="col-md-10 col-md-offset-1">
             @include('shared._messages')
             @yield('content')
             @include('layouts._footer')
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
