@extends('template')
@section('title', 'order-template')

@section('style')
  <style>
    .nav-order{
      margin: 0 0 0 60px;
    }
    .nav-order-text{
      font-size: 14px;
      font-weight: bold;
    }
  </style>
@endsection

@section('content')
  <div class="nav-order">
    <p class="nav-order-text">Недвижимость в Москве</p>
    <img src="{{asset('image/right.png')}}" alt="">
    <p class="nav-order-text"></p>
    <p class="nav-order-text"></p>
    <p class="nav-order-text"></p>
  </div>
@endsection
