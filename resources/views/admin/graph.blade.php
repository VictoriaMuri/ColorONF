@extends('layouts.app')

@section('title', 'Графики смен')

@section('main-content')
<section class="graph">
<div class="graph__container container">
  <h1 class="graph__title title">Графики</h1>
  <form class="graph__form form" action="{{ route('graph.store') }}" method="post">
    @csrf
    <div class="form__row">
      <label class="form__label" for="date">Дата</label>
      <input class="form__select" id="date" name="date" type="date" required autofocus>
    </div>
    <div class="form__row">
      <label class="form__label" for="time">Время</label>
      <input class="form__select" id="time" name="time" type="time" required autofocus>
    </div>
    <button class="form__btn btn">Добавить график</button>
  </form>
  @if (count($graphs) > 0)
  <div class="graph__scroll-block">
    <table class="graph__table table">
      <thead class="table__head">
        <tr class="table__row">
          <th class="table__item table__heading">Дата</th>
          <th class="table__item table__heading">Время</th>
          <th class="table__item table__heading">Статус</th>
          <th class="table__item table__heading"></th>
        </tr>
      </thead>
      <tbody class="table__body">
        @foreach ($graphs as $graph)
        <tr class="table__row">
          <td class="table__item">{{ $graph->date }}</td>
          <td class="table__item">{{ $graph->time }}</td>
          <td class="table__item">{{ $graph->status }}</td>
          <td class="table__item">
            <form action="{{ route('graph.destroy', $graph->id) }}" method="post">
              @csrf
              @method('DELETE')
              <input class="table__link" type="submit" value="❌">
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endif
</div>
</section>
    {{-- <div class="graph-forms">
        <form action="{{route('graph.store')}}" method="post">
            @method('POST')
            @csrf
            <div class="form1">
                <table cellpadding="4" cellspacing="1">
                    <tr><td><b>Дата</b></td><td><b>Время</b></td><td><b>Статус</b></td></tr>
                    @foreach($graphs as $graph)
                        <tr><td>{{$graph->date}}</td><td>{{$graph->time}}</td><td>{{$graph->status}}</td><td><a href="deleteGraph/{{ $graph->id }}">&#10008;</a></td></tr>
                    @endforeach
                    <tr><td><input type="date" name="date" id="date" placeholder=""></td><td><input type="time" name="time" id="time" placeholder=""></td></tr>
                </table>
                <div class="btn-form">
                    <a href=""><button class="btn-add" id="btn-add">ДОБАВИТЬ</button></a>
                </div>
            </div>
        </form>
    </div> --}}
@endsection
