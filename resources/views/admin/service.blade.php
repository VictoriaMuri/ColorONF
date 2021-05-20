@extends('layouts.app')

@section('title', 'Услуги')

@section('main-content')
<section class="services">
  <div class="services__container container">
    <h1 class="services__title visually-hidden">Управление услугами</h1>
    <h2 class="services__title title">Виды услуг</h2>
    <form class="services__form form" action="{{ route('typeService.store') }}" method="post">
      @csrf
      <div class="form__row">
        <label class="form__label" for="name">Название</label>
        <input class="form__select" id="name" name="name" type="text" required autofocus>
      </div>
      <div class="form__row">
        <label class="form__label" for="price">Цена</label>
        <input class="form__select" id="price" name="price" type="text" required autofocus>
      </div>
      <button class="form__btn btn">Добавить</button>
    </form>
    @if (count($typeServices) > 0)
    <div class="services__scroll-block">
      <table class="services__table table">
        <thead class="table__head">
          <tr class="table__row">
            <th class="table__item table__heading">Название</th>
            <th class="table__item table__heading">Цена</th>
            <th class="table__item table__heading" colspan="2"></th>
          </tr>
        </thead>
        <tbody class="table__body">
          @foreach($typeServices as $service)
          <tr class="table__row">
            <td class="table__item">{{ $service->name }}</td>
            <td class="table__item">{{ $service->price }}₽</td>
            <td class="table__item">
              <a href="">📝</a>
            </td>
            <td class="table__item">
              <a href="{{ route('deleteTypeService', $service->id) }}">❌</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif
    <h2 class="services__title title">Основные услуги</h2>
    <form class="services__form form" action="{{ route('serviceStore') }}" method="post">
      @csrf
      <div class="form__row">
        <label class="form__label" for="name">Название</label>
        <input class="form__select" id="name" name="name" type="text" required autofocus>
      </div>
      <div class="form__row">
        <label class="form__label" for="price">Цена</label>
        <input class="form__select" id="price" name="price" type="text" required autofocus>
      </div>
      <button class="form__btn btn">Добавить</button>
    </form>
    @if (count($services) > 0)
    <div class="services__scroll-block">
      <table class="services__table table">
        <thead class="table__head">
          <tr class="table__row">
            <th class="table__item table__heading">Название</th>
            <th class="table__item table__heading">Цена</th>
            <th class="table__item table__heading" colspan="2"></th>
          </tr>
        </thead>
        <tbody class="table__body">
          @foreach($services as $service)
          <tr class="table__row">
            <td class="table__item">{{ $service->name }}</td>
            <td class="table__item">{{ $service->price }}₽</td>
            <td class="table__item">
              <a href="">📝</a>
            </td>
            <td class="table__item">
              <a href="{{ route('deleteService', $service->id) }}">❌</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif
    <h2 class="services__title title">Дизайн</h2>
    <form class="services__form form" action="{{ route('design.store') }}" method="post">
      @csrf
      <div class="form__row">
        <label class="form__label" for="name">Название</label>
        <input class="form__select" id="name" name="name" type="text" required autofocus>
      </div>
      <div class="form__row">
        <label class="form__label" for="price">Цена</label>
        <input class="form__select" id="price" name="price" type="text" required autofocus>
      </div>
      <button class="form__btn btn">Добавить</button>
    </form>
    @if (count($designs) > 0)
    <div class="services__scroll-block">
      <table class="services__table table">
        <thead class="table__head">
          <tr class="table__row">
            <th class="table__item table__heading">Название</th>
            <th class="table__item table__heading">Цена</th>
            <th class="table__item table__heading" colspan="2"></th>
          </tr>
        </thead>
        <tbody class="table__body">
          @foreach($designs as $service)
          <tr class="table__row">
            <td class="table__item">{{ $service->name }}</td>
            <td class="table__item">{{ $service->price }}₽</td>
            <td class="table__item">
              <a href="">📝</a>
            </td>
            <td class="table__item">
              <a href="{{ route('deleteDesign', $service->id) }}">❌</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif
    <h2 class="services__title title">Дополнительно</h2>
    <form class="services__form form" action="{{ route('otherService.store') }}" method="post">
      @csrf
      <div class="form__row">
        <label class="form__label" for="name">Название</label>
        <input class="form__select" id="name" name="name" type="text" required autofocus>
      </div>
      <div class="form__row">
        <label class="form__label" for="price">Цена</label>
        <input class="form__select" id="price" name="price" type="text" required autofocus>
      </div>
      <button class="form__btn btn">Добавить</button>
    </form>
    @if (count($otherServices) > 0)
    <div class="services__scroll-block">
      <table class="services__table table">
        <thead class="table__head">
          <tr class="table__row">
            <th class="table__item table__heading">Название</th>
            <th class="table__item table__heading">Цена</th>
            <th class="table__item table__heading" colspan="2"></th>
          </tr>
        </thead>
        <tbody class="table__body">
          @foreach($otherServices as $service)
          <tr class="table__row">
            <td class="table__item">{{ $service->name }}</td>
            <td class="table__item">{{ $service->price }}₽</td>
            <td class="table__item">
              <a href="">📝</a>
            </td>
            <td class="table__item">
              <a href="{{ route('deleteOtherService', $service->id) }}">❌</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif
  </div>
</section>
@endsection
