@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="main__content">
    <div class="main__content--heading">
        @if(Auth::check())
        <form class="all-item__search"  action="{{ route('item.index') }}" method="get">
            @csrf
            <button class="all-item__link" type="submit">おすすめ</button>
        </form>
        <form class="mylist__search" action="{{ Route('mylist.index') }}" method="get">
            @csrf
            <button class="mylist__link" type="submit">マイリスト</button>
        </form>
        @else
        <form class="all-item__search" action="{{ route('item.index') }}" method="get">
            @csrf
            <button class="all-item__link" type="submit">おすすめ</button>
        </form>
        <form class="mylist__search" action="{{ Route('mylist.index') }}" method="get">
            @csrf
            <button class="mylist__link" type="submit" disabled>マイリスト</button>
        </form>
        @endif
    </div>
    <div class="main__content--body">
        @if(!$items)
        <div class="item__wrapper">
            <p>出品された商品はありません</p>
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