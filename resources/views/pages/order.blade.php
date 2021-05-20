@extends('layouts.app')

@section('title', 'Запись')

@section('main-content')

<section class="order">
  <div class="order__container container container--center">
    <h1 class="order__title title">Запись</h1>
    <form class="order__form form" action="{{ route('orderStore') }}" method="POST">
      @csrf
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      <div class="form__row">
        <label class="form__label" for="graph">Дата и время</label>
        <select class="form__select" id="graph" name="graph_id" required>
          <option value="">-</option>
          @foreach($graphs as $graph)
          <option value="{{ $graph->id }}">{{ $graph->date }} {{ $graph->time }}</option>
          @endforeach
        </select>
      </div>
      <div class="form__row">
        <label class="form__label" for="typeService">Вид</label>
        <select class="form__select" id="typeService" name="type_service_id" required>
          <option value="">-</option>
          @foreach($typeServices as $service)
          <option value="{{ $service->id }}">{{ $service->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form__row">
        <label class="form__label" for="service">Тип</label>
        <select class="form__select" id="service" name="service_id" required>
          <option value="">-</option>
          @foreach($services as $service)
          <option value="{{ $service->id }}">{{ $service->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form__row">
        <label class="form__label" for="design">Дизайн</label>
        <select class="form__select" id="design" name="design_id" required>
          <option value="">-</option>
          @foreach($designs as $service)
          <option value="{{ $service->id }}">{{ $service->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form__row">
        <label class="form__label" for="otherService">Дополнительно</label>
        <select class="form__select" id="otherService" name="other_service_id" required>
          <option value="">-</option>
          @foreach($otherServices as $service)
          <option value="{{ $service->id }}">{{ $service->name }}</option>
          @endforeach
        </select>
      </div>
      @if($errors->any())
      <div class="form__errors">
        <ul class="form__list">
          @foreach($errors->all() as $error)
          <li class="form__item">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if(session('success'))
      <p class="form__error">{{ session('success') }}</p>
      @endif
      <button class="form__btn btn">Записаться</button>
    </form>
  </div>
</section>
@endsection
