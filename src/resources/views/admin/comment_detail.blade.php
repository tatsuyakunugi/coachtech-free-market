@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment_detail.css') }}">
@endsection

@section('content')
<div class="detail-page__content">
    <div class="detail-page__heading">
        <a class="list-page__link" href="/admin/user_list">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <p>{{ $user->profile->name }}さんの投稿詳細</p>
    </div>
    @if(is_null($comments))
    <div class="message">
        <p>投稿はありません</p>
    </div>
    @else
    @foreach($comments as $comment)
    <div class="detail-card">
        <div class="detail-card__inner">
            <div class="detail-card__group">
                <div class="detail-card__title">
                    <p>名前：</p>
                </div>
                <div class="detail-card__item">
                    {{ $comment->user->profile->name }}
                </div>
            </div>
            <div class="detail-card__group">
                <div class="detail-card__title">
                    <p>商品名：</p>
                </div>
                <div class="detail-card__item">
                    {{ $comment->item->name }}
                </div>
            </div>
            <div class="detail-card__group">
                <div class="detail-card__title">
                    <p>投稿日：</p>
                </div>
                <div class="detail-card__item">
                    {{ $comment->created_at->format('Y-m-d H:i') }}
                </div>
            </div>
            <div class="detail-card__group">
                <div class="detail-card__title">
                    <p>投稿内容：</p>
                </div>
                <div class="detail-card__item">
                    {{ $comment->comment }}
                </div>
            </div>
            <div class="delete-form__button">
                <form class="delete-form" action="{{ route('admin.commentDestroy' ,$comment->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="delete-form__button-submit" type="submit">この投稿を削除する</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @endif               
</div>
@endsection