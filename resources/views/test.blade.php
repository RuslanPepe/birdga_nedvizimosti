@extends('template')
@section('title', 'test')

@section('style')
  <style>

  </style>
@endsection

@section('content')
  <input type="text" id="search" placeholder="Введите адрес или ЖК">
  <div id="map"></div>
@endsection

@section('script')
  <script src="https://suggest-maps.yandex.ru/v1/suggest?apikey=e7692a53-8e97-4a20-ae6f-ec1e70062c30&text=бурдж"></script>
@endsection
