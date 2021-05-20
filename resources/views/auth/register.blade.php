@extends('layouts.app')

@section('main-content')
<section class="login">
  <div class="login__container container container--center">
    <h1 class="login__title title">Регистрация аккаунта</h1>
    <form class="login__form form" action="{{ route('register') }}" method="POST">
      @csrf
      <div class="form__row">
        <label class="form__label" for="name">Имя</label>
        <input class="form__input @error('name') form__input--invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" autofocus>
      </div>
      <div class="form__row">
        <label class="form__label" for="email">E-mail</label>
        <input class="form__input @error('email') form__input--invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email">
      </div>
      <div class="form__row">
        <label class="form__label" for="password">Пароль</label>
        <input class="form__input @error('password') form__input--invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password">
      </div>
      <div class="form__row">
        <label class="form__label" for="password-confirm">Повторите пароль</label>
        <input class="form__input" id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password">
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
      <button class="form__btn btn">Зарегистрироваться</button>
    </form>
  </div>
</section>
@endsection
