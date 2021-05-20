<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
  <meta name="theme-color" content="#fff" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - ColorON</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap">
  <link rel="stylesheet" href="{{ asset("css/reset.css") }}">
  <link rel="stylesheet" href="{{ asset("css/app.css") }}">
  @yield('css-files')
</head>
<body>
  <div class="wrapper">
    @include('includes.header')
    <div class="filter"></div>
    <main class="main">
      @yield('main-content')
    </main>
    @include('includes.footer')
  </div>
  <script src="{{ asset("js/app.js") }}"></script>
  @yield('js-files')
</body>
</html>
