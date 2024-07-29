@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="item__content">
    <div class="item__content--inner">
        <div class="item__image">
            <div class="item__image-card"></div>
        </div>
        <div class="item__body">
            <div class="item__body--inner">
                <div class="item__title">
                    <h2>商品名</h2>
                    <p>ブランド名</p>
                    <p>￥</p>
                </div>
                <div class="item__utirities">
                    <div class="item__utirity">
                        <form class="like-form" action="{{ route('item.like', $item) }}" method="post">
                            @csrf
                            <button class="like-form__button-submit" type="submit">
                                <i class="fa-regular fa-star"></i>
                                {{ $item->followers->contains(auth()->user()) }}
                            </button>
                        </form>
                    </div>
                </div>
                <div class="purchase__link-form">
                    <a class="purchase__link" href="/purchase">購入する</a>
                </div>
                <div class="item__explanation">
                    <h3>商品説明</h3>
                    <p>カラー</p>
                </div>
                <div class="item__info">
                    <h3>商品の情報</h3>
                    <div class="category">
                        <p class="category-tag">カテゴリー</p>
                    </div>
                    <div class="condition">
                        <p class="condition-tag">商品の状態</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection