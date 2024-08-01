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
                <div class="purchase__link-form">
                    <a class="purchase__link" href="/purchase">購入する</a>
                </div>
                <div class="item__explanation">
                    <h3>商品説明</h3>
                    <p>{{ $item->description }}</p>
                </div>
                <div class="item__info">
                    <h3>商品の情報</h3>
                    <div class="category">
                        <p class="category-tag">カテゴリー</p>
                    </div>
                    <div class="condition">
                        <p class="condition-tag">{{ $item->condition->condition }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection