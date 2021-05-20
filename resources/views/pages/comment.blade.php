@extends('layouts.app')

@section('title', 'Отзывы')

@section('main-content')
<section class="reviews">
  <div class="reviews__container container @if (count($comments) == 0) container--center @endif">
    <h1 class="reviews__title visually-hidden">Отзывы</h1>
    @guest
      <p class="reviews__desc">
        Чтобы оставить отзыв необходимо <a class="reviews__link link link--underline" href="/login">войти</a> или <a class="reviews__link link link--underline" href="/register">зарегестрироваться</a>
      </p>
    @else
    <form class="reviews__form form" action="{{ route('commentStore') }}" method="post">
      @csrf
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      <textarea class="form__input form__textarea" name="description" placeholder="Отзыв..." minlength="10" maxlength="255" required></textarea>
      <button class="form__btn btn">Оставить отзыв</button>
    </form>
    @endguest
    <div class="reviews__items">
      @foreach($comments as $comment)
      <div class="reviews__item">
        <p class="reviews__name">{{ $comment->user->name }}</p>
        <p class="reviews__date date">{{ $comment->created_at->format('d.m.Y') }}</p>
        <p class="reviews__text">{{ $comment->description }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>
    {{-- <div class="bg-menu-comments">

        <div class="comments">

            @foreach($comments as $comment)
                <div class="comment">
                    <p><b>{{$comment->user['name']}}</b></p>
                    <p>{{$comment->date}}</p>
                    <p>{{$comment->description}}</p>
                </div><br>

            @endforeach
            {{$comments->links()}}
        </div>

        <div class="triangle5"></div>
        <div class="triangle6"></div>


        <div class="form-addcomment">
            <form action="{{route('comment.store')}}" method="post">
                @method('POST')
                @csrf

                @guest
                    @if (empty(Auth::user()->name))
                        <p>Чтобы оставить отзыв необходимо <a href="/login">войти</a> <br> или <a href="/register">зарегестрироваться</a></p>
                    @endif
                    @else
                        <p class="user">Вы: {{ Auth::user()->name }}</p>
                        <select name="user_id" id="selectUser" required>
                            <option value="{{ Auth::user()->id }}">{{ Auth::user()->id }}</option>
                        </select>
                    </select>
                @endguest

                <textarea name="description" placeholder="Отзыв..." rows="4"></textarea><br>

                <a href="/comment"><button class="btn-addcomment">ОСТАВИТЬ ОТЗЫВ</button></a>

            </form>
        </div>
        <div class="footer">
            <div class="content-footer">
                <p>© Авторские права - ColorON</p>
            </div>
        </div>
    </div> --}}
@endsection
