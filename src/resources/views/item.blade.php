@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="item__content">
    <div class="item__content--inner">
        <div class="item__image">
            <div class="item__image-card">
                <img src="{{ Storage::url($item->image_path) }}" alt="">
            </div>
        </div>
        <div class="item__body">
            <div class="item__body--inner">
                <div class="item__title">
                    <h2>商品名</h2>
                    <p>{{ $item->name }}</p>
                    <p>￥{{ $item->price }}</p>
                </div>
                @if(Auth::check())
                <div class="item__utilities">
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
                    <div class="comment__link-form--button">
                        <form class="comment__link-form" action="{{ route('comment.create', $item->id) }}" method="get">
                            @csrf
                            <button class="comment__link-form--button-submit" type="submit">
                                <i class="fa-regular fa-comment"></i>
                            </button>
                        </form>
                        <div class="comments_count">
                            {{ $comments->count() }}
                        </div>
                    </div>
                </div>
                @if($sold_item)
                <div class="purchase__link-form">
                    <p class="sold-item__info">販売は終了しました</p>
                </div>
                @elseif(($user->id) == ($item->user_id))
                <div class="purchase__link-form">
                    <p class="sell-item__info">現在出品中です</p>
                </div>
                @else(!$sold_item)
                <div class="purchase__link-form">
                    <a class="purchase__link" href="/purchase/{{ $item->id }}">購入する</a>
                </div>
                @endif
                @else
                <div class="item__utilities">
                    <div class="like-form__button">
                        <div class="like-form">
                            <button class="like-form__button-submit" type="submit">
                                <i class="fa-regular fa-star"></i>
                            </button>
                            <div class="likes_count">
                                {{ $item->likes_count }}
                            </div>
                        </div>
                    </div>
                    <div class="comment__link-form--button">
                        <form class="comment__link-form" action="{{ route('comment.show', $item->id) }}" method="get">
                            @csrf
                            <button class="comment__link-form--button-submit" type="submit">
                                <i class="fa-regular fa-comment"></i>
                            </button>
                        </form>
                        <div class="comments_count">
                            {{ $comments->count() }}
                        </div>
                    </div>
                </div>
                @endif
                <div class="item__explanation">
                    <h3>商品説明</h3>
                    <p class="item__description">{{ $item->description }}</p>
                </div>
                <div class="item__info">
                    <h3>商品の情報</h3>
                    <div class="category-info">
                        <span class="category-tag">カテゴリー</span>
                        @foreach($categories as $category)
                        <p class="category-tag__item">
                            {{ $category->name }}
                        </p>
                        @endforeach
                    </div>
                    <div class="condition-info">
                        <span class="condition-tag">商品の状態</span>
                        <p class="condition-tag__item">
                            {{ $item->condition->condition }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection