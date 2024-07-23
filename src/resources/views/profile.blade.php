@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile__alert">
    @if (session('message'))
    <div class="profile__alert--success">{{ session('message') }}</div>
    @endif 
</div>
<div class="profile__content">
    <div class="profile__heading">
        <p>プロフィール設定</p>
    </div>
    @if(empty($profile))
    <form class="profile-form" action="{{ route('profile_create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">新規</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--file">
                    <input type="file" name="image">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">ユーザー名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="name">
                </div>
            </div>
            @error('name')
            <div class="form__error">
                {{ $errors->first('name') }}
            </div>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">郵便番号</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--postcode">
                    <input type="text" name="post_code">
                </div>
            </div>
            @error('post_code')
            <div class="form__error">
                {{ $errors->first('post_code') }}
            </div>
            @enderror
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
            @error('address')
            <div class="form__error">
                {{ $errors->first('address') }}
            </div>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--building">
                    <input type="text" name="building">
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">作成する</button>
        </div>
    </form>
    @else
    <form class="profile-form" action="{{ route('profile_update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">更新</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--file">
                    <input type="file" name="image">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">ユーザー名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="name" placeholder="{{ $profile->name }}">
                </div>
            </div>
            @error('name')
            <div class="form__error">
                {{ $errors->first('name') }}
            </div>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">郵便番号</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--postcode">
                    <input type="text" name="post_code" placeholder="{{ $profile->post_code }}">
                </div>
            </div>
            @error('post_code')
            <div class="form__error">
                {{ $errors->first('post_code') }}
            </div>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">住所</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--address">
                    <input type="text" name="address" placeholder="{{ $profile->address }}">
                </div>
            </div>
            @error('address')
            <div class="form__error">
                {{ $errors->first('address') }}
            </div>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--building">
                    <input type="text" name="building" placeholder="{{ $profile->building }}">
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
    @endif
</div>
@endsection