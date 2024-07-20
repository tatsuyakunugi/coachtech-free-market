@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile__content">
    <div class="profile__heading">
        <p>プロフィール設定</p>
    </div>
    <form class="profile-form" action="" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label"></span>
            </div>
            <div class="form__group-content">
                <div class="form__input--file">
                    <input type="file" name="">
                </div>
            </div>
            <div class="form__error">
                <!--ここにバリデーション-->
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">ユーザー名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="user_name">
                </div>
            </div>
            <div class="form__error">
                <!--ここにバリデーション-->
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">郵便番号</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--postcode">
                    <input type="text" name="postcode">
                </div>
            </div>
            <div class="form__error">
                <!--ここにバリデーション-->
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">住所</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--address">
                    <input type="text" name="address">
                </div>
            </div>
            <div class="form__error">
                <!--ここにバリデーション-->
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--building">
                    <input type="" name="">
                </div>
            </div>
            <div class="form__error">
                <!--ここにバリデーション-->
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection