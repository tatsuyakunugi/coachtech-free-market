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
                            {{ $item->user->like_items->count() }}
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
                            {{ $item->user->like_items->count() }}
                        </div>
                        @endif
                    </div>
                    @endif
                    <div class="comment-link">
                        <a class="comment-link__button"  href="/comment/{{ $item->id }}">
                            <i class="fa-regular fa-comment"></i>
                        </a>
                    </div>
                </div>
                <div class="purchase__link-form">
                    <a class="purchase__link" href="/purchase">購入する</a>
                </div>
                <div class="item__explanation">
                    <h3>商品説明</h3>
                    <p>{{ $item->description }}</p>
                </div>
                <div class="item__info">
                    <h3>商品の情報</h3>
                    <div class="category-info">
                        @foreach($categories as $category)
                        <p class="category-tag">
                            {{ $category->name }}
                        </p>
                        @endforeach
                    </div>
                    <div class="condition-info">
                        <p class="condition-tag">{{ $item->condition->condition }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection