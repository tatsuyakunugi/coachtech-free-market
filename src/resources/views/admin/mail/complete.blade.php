@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/complete.css') }}">
@endsection

@section('content')
<div class="complete-page__content">
    <div class="complete-card">
        <div class="complete-card__message">
            <p>メール送信が完了しました</p>
        </div>
        <div class="link-form">
            <a class="top-page__link" href="/admin">
                TOPページに戻る
            </a>
        </div>
    </div>             
</div>
@endsection