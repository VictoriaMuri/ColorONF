@extends('layouts.app')

@section('main-content')
<section class="login">
  <div class="login__container container container--center">
    <h1 class="login__title title">Вход в аккаунт</h1>
    <form class="login__form form" action="{{ route('login') }}" method="POST">
      @csrf
      <div class="form__row">
        <label class="form__label" for="email">E-mail</label>
        <input class="form__input @error('email') form__input--invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      </div>
      <div class="form__row">
        <label class="form__label" for="password">Пароль</label>
        <input class="form__input @error('password') form__input--invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password">
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
      <button class="form__btn btn">Войти</button>
    </form>
  </div>
</section>
@endsection
