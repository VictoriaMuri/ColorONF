@extends('layouts.app')

@section('title', 'Цены')

@section('main-content')
<section class="price">
  <div class="price__container container">
    <div class="price__item">
      <h1 class="price__subtitle subtitle">Прайс</h1>
      @foreach($typeServices as $service)
      <div class="price__block">
        <p class="price__name">{{ $service->name }}</p>
        <p class="price__num">{{ $service->price }}₽</p>
      </div>
      @endforeach
    </div>
    <div class="price__item">
      <h2 class="price__subtitle subtitle">Основное</h2>
      @foreach($services as $service)
      <div class="price__block">
        <p class="price__name">{{ $service->name }}</p>
        <p class="price__num">{{ $service->price }}₽</p>
      </div>
      @endforeach
    </div>
    <div class="price__item">
      <h2 class="price__subtitle subtitle">Дизайн</h2>
      <p class="price__desc">
        * цена указана за один ноготь
      </p>
      @foreach($designs as $design)
      <div class="price__block">
        <p class="price__name">{{ $design->name }}</p>
        <p class="price__num">{{ $design->price }}₽</p>
      </div>
      @endforeach
    </div>
    <div class="price__item">
      <h2 class="price__subtitle subtitle">Дополнительно</h2>
      <p class="price__desc">
        * цена ремонта и наращивания указана за один ноготь
      </p>
      @foreach($otherServices as $service)
      <div class="price__block">
        <p class="price__name">{{ $service->name }}</p>
        <p class="price__num">{{ $service->price }}₽</p>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
