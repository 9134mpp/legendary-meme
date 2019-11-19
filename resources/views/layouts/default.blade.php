<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Weibo App')- Laravel 新手入门教程</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
</head>
<body>
@include('layouts._header')

{{--container　容器布局--}}
<div class="container">
  <div class="offset-md-1 col-md-10">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
  </div>
</div>
</body>
</html>

