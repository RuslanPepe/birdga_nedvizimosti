<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  @yield('style')
  <style>
    body{
      scroll-behavior: smooth;
    }
    .header{
      margin-bottom: 20px;
      user-select: none;
    }
    .imgIcon{
      height: 64px;
    }
    .button-header{
    text-decoration: none;
    color: black;
    font-weight: 700;
    margin-left: 15px;
    }
  </style>
</head>
<body>
@include('header')
  @yield('content')
@include('footer')

@yield('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
