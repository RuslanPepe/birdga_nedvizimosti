<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  @yield('style')
  <style>
    .btn-light{
      border-radius: 0;
    }
    .header{
      margin-bottom: 45px;
    }
    .imgIcon{
      height: 64px;
      margin-left: 47%;
    }
    .button-header-cl{
      margin-left: 22%;
    }
    .button-header{
    text-decoration: none;
    color: black;
    font-weight: 700;
    margin-left: 15px;
    }
    .search-select{
      font-size: 0;
    }
    .back-search-select{
      display: inline;
      position: absolute;
    }
    .btn-search-select{
      display: inline;
      position: absolute;
      margin-top: 200px;
      margin-left: 360px;
    }
    .btn-select{
      font-weight: 600;
      margin: 0;
      border: none;
      font-size: 16px;
      padding: 12px 15px;
      background: rgba(0, 0, 0, 0.45);
      color: white;
    }
    .search-select-int{
      display: inline;
      position: absolute;
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
