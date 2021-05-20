@extends('layouts.app')

@section('title', 'Записи')

@section('main-content')
<section class="orders">
  <div class="orders__container container container--center">
    <h1 class="orders__title title">
      Записи
    </h1>
    @if (count($orders) > 0)
    <div class="orders__scroll-block">
      <table class="orders__table table">
        <thead class="table__head">
          <tr class="table__row">
            <th class="table__item table__heading">Дата</th>
            <th class="table__item table__heading">Время</th>
            <th class="table__item table__heading">Сумма</th>
            <th class="table__item table__heading"></th>
          </tr>
        </thead>
        <tbody class="table__body">
          @foreach ($orders as $order)
          <tr class="table__row">
            <td class="table__item">{{ $order->graph->date }}</td>
            <td class="table__item">{{ $order->graph->time }}</td>
            <td class="table__item">{{ $order->sum }}₽</td>
            <td class="table__item">
              <a class="table__link" href="{{ route('orderDelete', $order->id) }}">❌</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @else
    <p class="orders__message">Записей нет 😶</p>
    @endif
  </div>
</section>
@endsection
