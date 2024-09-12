@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')
<div class="mypage__content">
    <div class="mypage__content--heading">
        <div class="user__info">
            @if($profile)
            <div class="user-image">
                @if(!is_null($profile->image_path))
                <img src="{{ Storage::url($profile->image_path) }}" alt="">
                @else
                <p class="user-image__null"></p>
                @endif
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
        <div class="item__search-form">
            <form class="sell-item__search" action="{{ route('mypage.index') }}" method="get">
                @csrf
                <button class="sell-item__button" type="submit">出品した商品</button>
            </form>
            <form class="sold-item__search" action="{{ route('sold.index') }}" method="get">
                @csrf
                <button class="sold-item__button" type="submit">購入した商品</button>
            </form>
        </div>
    </div>
    <div class="mypage__content--body">
        @if($items)
        <div class="item__wrapper">
            @foreach($items as $item)
            <div class="item-card">
                <a class="item__link" href="/item/{{ $item->id }}">
                    <img src="{{ Storage::url($item->image_path) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $items->links() }}
        </div>
        @elseif($sold_items)
        <div class="item__wrapper">
            @foreach($sold_items as $sold_item)
            <div class="item-card">
                <a class="item__link" href="/item/{{ $sold_item->item->id }}">
                    <img src="{{ Storage::url($sold_item->item->image_path) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $sold_items->links() }}
        </div>
        @else
        <div class="item__wrapper">
            <p>該当する商品はありません</p>
        </div>
        @endif
    </div>
</div>
@endsection