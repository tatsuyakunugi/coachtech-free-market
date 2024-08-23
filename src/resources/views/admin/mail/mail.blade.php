@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mail.css') }}">
@endsection

@section('content')
<div class="mail-page__content">
    <div class="mail-page__heading">
        <a class="top-page__link" href="/admin"><</a>
        <p>メール作成フォーム</p>
    </div>
    <form class="mail-form" action="{{ route('admin.mailSend') }}" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label">送信者名</span>
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
                <span class="form__label">メッセージ</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--message">
                    <textarea rows="10" name="message"></textarea>
                </div>
            </div>
            @error('message')
            <div class="form__error">
                {{ $errors->first('message') }}
            </div>
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信する</button>
        </div>
    </form>             
</div>
@endsection