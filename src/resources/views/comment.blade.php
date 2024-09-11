@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection

@section('content')
<div class="comment__alert">
    @if (session('message'))
    <div class="comment__alert--success">{{ session('message') }}</div>
    @endif 
</div>
<div class="comment__content">
    <div class="comment__content--inner">
        <div class="item__image">
            <div class="redilect__button">
                <a class="item__link" href="/item/{{ $item->id }}">
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </div>
            <div class="item__image-card">
                <img src="{{ Storage::url($item->image_path) }}" alt="">
            </div>
        </div>
        <div class="comment__body">
            <div class="comment__body--inner">
                <div class="item__title">
                    <h2>商品名</h2>
                    <p>{{ $item->name }}</p>
                    <p>￥{{ $item->price }}</p>
                </div>
                <div class="item__utilities">
                    @if(Auth::check())
                    <div class="like-form__button">
                        @if(!Auth::user()->is_like($item->id))
                        <form class="like-form" action="{{ route('likes.store', $item) }}" method="post">
                            @csrf
                            <button class="like-form__button-submit" type="submit">
                                <i class="fa-regular fa-star"></i>
                            </button>
                        </form>
                        <div class="likes_count">
                            {{ $item->likes_count }}
                        </div>
                        @else
                        <form class="unlike-form" action="{{ route('likes.destroy', $item) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="unlike-form__button-submit" type="submit">
                                <i class="fa-regular fa-star"></i>
                            </button>
                        </form>
                        <div class="likes_count">
                            {{ $item->likes_count }}
                        </div>
                        @endif
                    </div>
                    @endif
                    <div class="coment__link-form--button">
                        <form class="comment__link-form" action="{{ route('comment.show', $item->id) }}" method="get">
                            @csrf
                            <button class="coment__link-form--button-submit" type="submit">
                                <i class="fa-regular fa-comment"></i>
                            </button>
                        </form>
                        <div class="comments_count">
                            {{ $comments->count() }}
                        </div>
                    </div>
                </div>
                <div class="user-info">
                    <div class="user-info__tag">投稿者名</div>
                    @if($user->profile)
                    <p>{{ $user->profile->name }}</p>
                    @else
                    <p>ゲストさん</p>
                    @endif
                </div>
            </div>
            <form class="comment-form" action="{{ route('comment.store', $item->id) }}" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <p>商品へのコメント</p>
                    </div>
                    <div class="form__input--comment">
                        <textarea rows="10" name="comment"></textarea>
                    </div>
                    @error('comment')
                    <div class="form__error">
                        {{ $errors->first('comment') }}
                    </div>
                    @enderror
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">
                        コメントを送信する
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection