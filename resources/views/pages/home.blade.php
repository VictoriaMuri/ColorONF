@extends('layouts.app')

@section('title', 'Главная')

@section('main-content')
<section class="banner">
  <div class="banner__container container">
    <div class="banner__content">
      <div class="banner__heading">
        <h1 class="banner__title">ColorON</h1>
        <p class="banner__desc">маникюрный салон</p>
      </div>
      <p class="banner__text">
        Мы предусмотрели каждую мелочь,<br>
        чтобы Ваше пребывание у нас в<br>
        гостях доставило улыбку радости и<br>
        приятного удивления.
      </p>
    </div>
    <div class="banner__decor banner__decor--shadow"></div>
    <div class="banner__decor"></div>
    <img class="banner__img img" src="/img/banner.png" alt="Рука">
  </div>
</section>
<section class="about">
  <h2 class="about__title visually-hidden">О нас</h2>
  <div class="about__container container">
    <div class="about__decoration">
      <img class="about__img img" src="/img/about.png" alt="">
      <div class="about__decor about__decor--border"></div>
      <div class="about__decor about__decor--hollow"></div>
    </div>
    <p class="about__text">
      Мы специализированная нейл-студия, и собрали самую лучшую палитру материалов и цветов из 300 цветов для маникюра и педикюра бизнес-уровня.
    </p>
  </div>
</section>
<section class="demo">
  <h2 class="demo__title visually-hidden">Демонстрация</h2>
  <div class="demo__container container">
    <div class="demo__item">
      <img class="demo__img img" src="/img/pedicure.jpg" alt="Педикюр">
      <p class="demo__desc">Педикюр</p>
    </div>
    <div class="demo__item">
      <img class="demo__img img" src="/img/manicure.jpg" alt="Маникюр">
      <p class="demo__desc">Маникюр</p>
    </div>
  </div>
</section>
<section class="works">
  <div class="works__container container">
    <h1 class="works__title">Наши работы</h1>
    <div class="works__items">
      <img class="works__img img" src="/img/works/1.jpg" alt="">
      <img class="works__img img" src="/img/works/2.jpg" alt="">
      <img class="works__img img" src="/img/works/3.jpg" alt="">
      <img class="works__img img" src="/img/works/4.jpg" alt="">
    </div>
    <div class="works__decor works__decor--shadow"></div>
    <div class="works__decor"></div>
  </div>
</section>
@endsection
