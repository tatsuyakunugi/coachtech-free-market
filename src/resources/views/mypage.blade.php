@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage__content">
    <div class="mypage__content--heading">
        <div class="user__info">
            <div class="user-image"></div>
            <div class="user-name">
                <p>ユーザー名</p>
            </div>
            <div class="profile__link-form">
                <a class="profile__link" href="mypage/profile">プロフィールを編集</a>
            </div>
        </div>
        <div class="item__link">
            <div class="">
                <a href="">出品した商品</a>
            </div>
            <div class="">
                <a href="">購入した商品</a>
            </div>
        </div>
    </div>
    <div class="mypage__content--body">
        <div class="item-card"></div>
    </div>
</div>
@endsection