@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage__content">
    <div class="mypage__content--heading">
        <div class="user__info">
            @if($profile)
            <div class="user-image">
                <img src="{{ Storage::url($profile->image_path) }}" alt="">
            </div>
            <div class="user-name">
                <p>{{ $profile->name }}さん</p>
            </div>
            @else
            <div class="user-name">
                <p>ゲストさん</p>
            </div>
            @endif
            <div class="profile__link-form">
                <a class="profile__link" href="mypage/profile">プロフィールを編集</a>
            </div>
        </div>
        <div class="item__link">
            <form class="sell-item__search" action="/mypage" method="get">
                @csrf
                <button class="sell-item__link" type="submit">出品した商品</button>
            </form>
            <form class="purchase-item__search" action="" method="get">
                @csrf
                <button class="purchase-item__link" type="submit">購入した商品</button>
            </form>
        </div>
    </div>
    <div class="mypage__content--body">
        @if(!$items)
        <div class="item__wrapper">
            <p>該当の商品はありません</p>
        </div>
        @else
        <div class="item__wrapper">
            @foreach($items as $item)
            <div class="item-card">
                <a class="item__link" href="/item/{{ $item->id }}">
                    <img src="{{ Storage::url($item->image_path) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection