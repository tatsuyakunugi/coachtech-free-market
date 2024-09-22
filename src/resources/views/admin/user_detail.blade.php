@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user_detail.css') }}">
@endsection

@section('content')
<div class="detail-page__content">
    <div class="detail-page__heading">
        <a class="detail-page__link" href="/admin/user_list">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        @if($user->profile)
        <p>{{ $user->profile->name }}さんのユーザー詳細</p>
        @else
        <p>ゲストさんのユーザー詳細</p>
        @endif
    </div>
    <div class="detail-card">
        <div class="detail-card__inner">
            <div class="detail-card__group">
                <div class="detail-card__title">
                    <p class="detail-card__tag">名前：</p>
                </div>
                @if($user->profile)
                <div class="detail-card__item">
                    {{ $user->profile->name }}
                </div>
                @else
                <div class="detail-card__item">
                    無し
                </div>
                @endif
            </div>
            <div class="detail-card__group">
                <div class="detail-card__title">
                    <p class="detail-card__tag">メール：</p>
                </div>
                <div class="detail-card__item">
                    {{ $user->email }}
                </div>
            </div>
            <div class="detail-card__group">
                <div class="detail-card__title">
                    <p class="detail-card__tag">住所：</p>
                </div>
                @if($user->profile)
                <div class="detail-card__item">
                    {{ $user->profile->address }}{{ $user->profile->building }}
                </div>
                @else
                <div class="detail-card__item">
                    無し
                </div>
                @endif
            </div>
            <div class="detail-card__group">
                <div class="detail-card__title">
                    <p class="detail-card__tag">登録日：</p>
                </div>
                <div class="detail-card__item">
                    {{ $user->created_at->format('Y-m-d H:i') }}
                </div>
            </div>
            <div class="detail-card__group">
                <div class="detail-card__title">
                    <p class="detail-card__tag">更新日：</p>
                </div>
                @if($user->profile)
                <div class="detail-card__item">
                    {{ $user->profile->updated_at->format('Y-m-d H:i') }}
                </div>
                @else
                <div class="detail-card__item">
                    更新情報はありません
                </div>
                @endif
            </div>
            <div class="delete-form__button">
                <form class="delete-form" action="{{ route('admin.userDestroy', $user->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="delete-form__button-submit" type="submit">このユーザーを削除する</button>
                </form>
            </div>
        </div>
    </div>               
</div>
@endsection