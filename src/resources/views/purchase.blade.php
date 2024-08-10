@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase__content">
    <div class="purchase__content--inner">
        <div class="item-edit__body">
            <div class="item__info--item">
                <div class="item__image">
                    <img src="{{ Storage::url($item->image_path) }}" alt="">
                </div>
                <div class="item__info">
                    <h2>{{ $item->name }}</h2>
                    <p>￥{{ $item->price }}</p>
                </div>
            </div>
            <div class="item-edit__body--item">
                <p class="pay-edit__link-tag">支払い方法</p>
                <a class="pay-edit__link" href="">変更する</a>
            </div>
            <div class="item-edit__body--item">
                <p class="address__link-tag">配送先</p>
                <a class="address__link" href="/purchase/address/{{ $item->id }}">変更する</a>
            </div>
        </div>
        <div class="purchase__body">
            <form class="purchase-form" action="">
                <div class="purchase__form-card">
                    <div class="purchase__form-card--item">
                        <p>商品代金</p>
                        <p>￥{{ $item->price }}</p>
                    </div>
                    <div class="purchase__form-card--item">
                        <p>支払い金額</p>
                        <p>￥{{ $item->price }}</p>
                    </div>
                    <div class="purchase__form-card--item">
                        <p>支払い方法</p>
                        <p></p>
                    </div>
                </div>
                <div class="purchase-form__button">
                    <button class="purchase-form__button-submit">購入する</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection