@extends('template')
@section('title', 'мейн')

@section('style')
  <style>
    .back-search-select{
      -moz-border-radius-topleft: 30px;
      -moz-border-radius-topright: 30px;
      width: 100%;
    }
  </style>
@endsection

@section('content')
  <div class="search-select">
    <img class="back-search-select" src="{{asset('/image/back-select.png')}}" alt="error" style="pointer-events: none;">
    <div class="btn-search-select">
      <button type="button" class="btn btn-select btn-light" style="border-radius: 5px 0 0 0">Купить</button>
      <button type="button" class="btn btn-select btn-light">Снять</button>
      <button type="button" class="btn btn-select btn-light">Посуточно</button>
      <button type="button" class="btn btn-select btn-light">Построить</button>
      <button type="button" class="btn btn-select btn-light">Ипотека</button>
      <button type="button" class="btn btn-select btn-light">Подобрать риелтора</button>
      <button type="button" class="btn btn-select btn-light" style="border-radius: 0 5px 0 0">Новостройки</button>
    </div>
    <div class="search-select-int">
    </div>
  </div>
@endsection
