<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <title>
    @section('title')
      {{ config("app.name", "Laravel") }}
    @show
  </title>
</head>

<script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>

<body>
  @include("components.header")

  @yield("content")

  @include("components.footer")
</body>

</html>
